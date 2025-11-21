<?php
require 'config.php';
require_login();

// Search params
$q = trim($_GET['q'] ?? '');
$field = $_GET['field'] ?? 'all';
$limit = 100;

$sql = 'SELECT * FROM lsp';
$conds = [];
$params = [];
if($q !== ''){
    if($field === 'all'){
        $sql .= ' WHERE nama_lep LIKE ? OR provinsi LIKE ? OR email LIKE ? OR no_hp LIKE ?';
        $like = '%'.$q.'%';
        $params = [$like,$like,$like,$like];
    } else {
        $sql .= ' WHERE ' . ($field === 'nama' ? 'nama_lep' : ($field === 'provinsi' ? 'provinsi' : ($field === 'email' ? 'email' : 'no_hp'))) . ' LIKE ?';
        $params = ['%'.$q.'%'];
    }
}
$sql .= ' ORDER BY id ASC LIMIT ' . (int)$limit;
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rows = $stmt->fetchAll();

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Daftar LSP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div id="notifStatus" 
     style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #4caf50;
        color: white;
        padding: 10px 15px;
        border-radius: 6px;
        font-size: 14px;
        display: none;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
        z-index: 9999;
        opacity: 0;
        transition: opacity 0.4s;
     ">
    Status berhasil diperbarui!
</div>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem LSP</a>
    <div class="d-flex">
      <span class="me-3">Hello, <?php echo e($_SESSION['username']); ?></span>
      <a class="btn btn-outline-secondary btn-sm" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="container py-4">
  <div class="d-flex mb-3">
    <form class="d-flex" method="get">
      <input class="form-control me-2" name="q" placeholder="Cari... (nama, provinsi, email, no_hp)" value="<?php echo e($q); ?>">
      <select name="field" class="form-select me-2">
        <option value="all" <?php if($field=='all') echo 'selected'; ?>>Semua</option>
        <option value="nama" <?php if($field=='nama') echo 'selected'; ?>>Nama</option>
        <option value="provinsi" <?php if($field=='provinsi') echo 'selected'; ?>>Provinsi</option>
        <option value="email" <?php if($field=='email') echo 'selected'; ?>>Email</option>
        <option value="nohp" <?php if($field=='nohp') echo 'selected'; ?>>No HP</option>
      </select>
      <button class="btn btn-primary">Cari</button>
    </form>
    <div class="ms-auto">
      <a href="add.php" class="btn btn-success">Tambah LSP</a>
    </div>
  </div>

  <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Provinsi</th>
        <th>No HP</th>
        <th>Status Email</th>
        <th>Status WA</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach($rows as $r): ?>
        <tr>
          <td><?php echo e($r['id']); ?></td>
          <td><?php echo e($r['nama_lep']); ?></td>
          <td><?php echo e($r['email']); ?></td>
          <td><?php echo e($r['provinsi']); ?></td>
          <td><?php echo e($r['no_hp']); ?></td>
          <td>
            <!-- Mailto -->
            <?php
            $subject = 'Penawaran Kerjasama - Mozasoft';
            $body = "Halo " . $r['nama_lep'] . ",%0D%0A%0D%0APerkenalkan kami dari Mozasoft ingin menawarkan...%0D%0A%0D%0ASalam,%0D%0ATim Mozasoft";
            $mailto = 'mailto:' . rawurlencode($r['email']) . '?subject=' . rawurlencode($subject) . '&body=' . $body;

            // WhatsApp link
            $nohp = preg_replace('/[^0-9]/','', $r['no_hp']); // hilangkan semua kecuali angka

if ($nohp !== '') {
    // Jika mulai dengan 62 (sudah benar)
    if (substr($nohp,0,2) === '62') {
        // tidak perlu ubah apa-apa
    }
    // Jika mulai dengan 0 → ganti ke 62
    elseif (substr($nohp,0,1) === '0') {
        $nohp = '62' . substr($nohp,1);
    }
    // Jika mulai dengan 8 → berarti user isi tanpa 0 → tambahkan 62
    elseif (substr($nohp,0,1) === '8') {
        $nohp = '62' . $nohp;
    }
}

            $wa_text = "Halo " . $r['nama_lep'] . ", kami dari Mozasoft ingin menginformasikan...";
            $wa_url = $nohp ? ('https://api.whatsapp.com/send?phone=' . $nohp . '&text=' . rawurlencode($wa_text)) : '#';
            ?>

            <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo e($mailto); ?>">Kirim Email</a>
            <a class="btn btn-sm btn-success" target="_blank" href="<?php echo e($wa_url); ?>">Kirim WA</a>

            <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo e($r['id']); ?>">Edit</a>
            <!-- <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo e($r['id']); ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a> -->
          </td>
          <td>
    <select class="status-email" data-id="<?= $r['id']; ?>">
        <option value="" <?= $r['status_email']==''?'selected':''; ?>>Blank</option>
        <option value="sent" <?= $r['status_email']=='sent'?'selected':''; ?>>Sent</option>
        <option value="unsent" <?= $r['status_email']=='unsent'?'selected':''; ?>>Unsent</option>
        <option value="diterima" <?= $r['status_email']=='diterima'?'selected':''; ?>>Diterima</option>
        <option value="ditolak" <?= $r['status_email']=='ditolak'?'selected':''; ?>>Ditolak</option>
    </select>
</td>

<td>
    <select class="status-wa" data-id="<?= $r['id']; ?>">
        <option value="" <?= $r['status_wa']==''?'selected':''; ?>>Blank</option>
        <option value="sent" <?= $r['status_wa']=='sent'?'selected':''; ?>>Sent</option>
        <option value="unsent" <?= $r['status_wa']=='unsent'?'selected':''; ?>>Unsent</option>
        <option value="diterima" <?= $r['status_wa']=='diterima'?'selected':''; ?>>Diterima</option>
        <option value="ditolak" <?= $r['status_wa']=='ditolak'?'selected':''; ?>>Ditolak</option>
    </select>
</td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function showNotif() {
    let notif = document.getElementById('notifStatus');
    notif.style.display = 'block';
    setTimeout(() => { notif.style.opacity = 1; }, 10);

    // Hilang otomatis setelah 2 detik
    setTimeout(() => {
        notif.style.opacity = 0;
        setTimeout(() => { notif.style.display = 'none'; }, 400);
    }, 2000);
}
</script>


<script>
$(document).on('change', '.status-email, .status-wa', function () {
    let id = $(this).data('id');
    let field = $(this).hasClass('status-email') ? 'status_email' : 'status_wa';
    let value = $(this).val();

    $.ajax({
        url: "update_status.php",
        method: "POST",
        data: { id: id, field: field, value: value },
        success: function (res) {
            console.log("Updated: " + res);
            showNotif();
        }
    });
});
</script>
