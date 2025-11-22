<?php
require 'config.php';
require_login();

// Search params
$q = trim($_GET['q'] ?? '');
$field = $_GET['field'] ?? 'all';

// Pagination setup
$limit  = 100;
$page   = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($page - 1) * $limit;

// Base Query
$where = '';
$params = [];

// Filtering
if ($q !== '') {
    if ($field === 'all') {
        $where = ' WHERE nama_lep LIKE ? OR provinsi LIKE ? OR email LIKE ? OR no_hp LIKE ?';
        $like = '%'.$q.'%';
        $params = [$like,$like,$like,$like];
    } else {
        $column = ($field === 'nama' ? 'nama_lep' :
                  ($field === 'provinsi' ? 'provinsi' :
                  ($field === 'email' ? 'email' : 'no_hp')));
        $where = " WHERE $column LIKE ?";
        $params = ['%'.$q.'%'];
    }
}

// Hitung total data (untuk info jumlah)
$countSql = "SELECT COUNT(*) FROM lsp $where";
$countStmt = $pdo->prepare($countSql);
$countStmt->execute($params);
$total_lsp = $countStmt->fetchColumn();

// Query data sesuai pagination
$sql = "SELECT * FROM lsp $where ORDER BY provinsi ASC LIMIT ? OFFSET ?";
$stmt = $pdo->prepare($sql);

// merge params + limit + offset
$execParams = array_merge($params, [$limit, $offset]);
$stmt->execute($execParams);
$rows = $stmt->fetchAll();

$no = $offset + 1;

// Cek apakah masih ada halaman berikutnya
$hasNextPage = (($offset + $limit) < $total_lsp);

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Daftar LSP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
.status-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    display: inline-block;
    margin-left: 8px;
}
.status-empty { background: #cccccc; }
.status-sent { background: #28a745; }      /* hijau */
.status-unsent { background: #dc3545; }    /* merah */
.status-diterima { background: #007bff; }  /* biru */
.status-ditolak { background: #6c757d; }   /* abu gelap */
</style>

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
</head>

<?php
function countStatus($pdo, $column, $status) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM lsp WHERE $column = ?");
    $stmt->execute([$status]);
    return $stmt->fetchColumn();
}

// STATUS EMAIL
$email_sent     = countStatus($pdo, 'status_email', 'sent');
$email_unsent   = countStatus($pdo, 'status_email', 'unsent');
$email_diterima = countStatus($pdo, 'status_email', 'diterima');
$email_ditolak  = countStatus($pdo, 'status_email', 'ditolak');

// STATUS WA
$wa_sent     = countStatus($pdo, 'status_wa', 'sent');
$wa_unsent   = countStatus($pdo, 'status_wa', 'unsent');
$wa_diterima = countStatus($pdo, 'status_wa', 'diterima');
$wa_ditolak  = countStatus($pdo, 'status_wa', 'ditolak');
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Pemasaran LSP - Moza Asesmen</a>
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
      <button class="btn btn-primary btn-sm">Cari</button>
    </form>
    <div class="ms-3 d-flex align-items-center">
    <div class="p-2 border rounded bg-light">
        <strong>Email:</strong>
        <span class="badge bg-success"><?= $email_sent ?></span>
        <span class="badge bg-danger"><?= $email_unsent ?></span>
        <span class="badge bg-primary"><?= $email_diterima ?></span>
        <span class="badge bg-secondary"><?= $email_ditolak ?></span>
    </div>

    <div class="p-2 border rounded bg-light ms-2">
        <strong>WA:</strong>
        <span class="badge bg-success"><?= $wa_sent ?></span>
        <span class="badge bg-danger"><?= $wa_unsent ?></span>
        <span class="badge bg-primary"><?= $wa_diterima ?></span>
        <span class="badge bg-secondary"><?= $wa_ditolak ?></span>
    </div>
</div>
    <div class="ms-auto">
      <b><?= number_format($total_lsp) ?> LSP</b>
      <a href="add.php" class="btn btn-sm btn-success">+</a>
    </div>
  </div>

  


  <table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Lokasi</th>
        <th style="text-align:center;">No HP</th>
        <th width="15%" style="text-align:center;" colspan="2">Email</th>
        <th width="15%" style="text-align:center;" colspan="2">WA</th>
    </tr>
    </thead>
    <tbody>
      <?php 
      foreach($rows as $r): ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($r['nama_lep']); ?>
            <a href="edit.php?id=<?php echo e($r['id']); ?>">
                <i class="fa fa-pencil-alt"></i>
            </a>
          </td>
          <td><?php echo e($r['email']); ?></td>
          <td><?php echo e($r['provinsi']); ?></td>
          <td style="text-align:center;"><?php echo e($r['no_hp']); ?></td>
          <td style="text-align:center;">
            <!-- Mailto -->
            <?php
            $subject = 'Penawaran Aplikasi Digital Asesmen untuk LSP – Moza Asesmen ';
            $body = 
              "Kepada Yth. Bapak/Ibu Pengelola LSP %0D%0A" .
              $r['nama_lep'] . "%0D%0A%0D%0A" .
              "Salam hormat,%0D%0A%0D%0A" .
              "Perkenalkan, saya Risma dari tim Moza Asesmen — aplikasi berbasis web yang kami kembangkan untuk membantu LSP dalam mengelola proses asesmen dengan lebih efisien, cepat, dan terdokumentasi.%0D%0A%0D%0A" .
              "Selama ini kami banyak menemukan tantangan di LSP seperti pengumpulan berkas asesmen manual, kesulitan rekap dokumen SK, Apl, fria, frak, dan lainya, serta monitoring asesor dan peserta yang memakan waktu. Melalui Moza Asesmen, proses tersebut dapat diotomatisasi dengan tampilan yang sederhana dan mudah digunakan, tanpa perlu perubahan besar pada sistem kerja yang sudah ada.%0D%0A%0D%0A" .
              "Sebagai bahan perkenalan, kami lampirkan file PDF yang berisi:%0D%0A" .
              "- Ringkasan fitur dan manfaat Moza Asesmen%0D%0A" .
              "- Cuplikan tampilan aplikasi%0D%0A" .
              "- Rencana pengembangan (roadmap)%0D%0A%0D%0A" .
              "Kami sangat terbuka untuk menjadwalkan presentasi atau demo singkat (±10 menit) agar Bapak/Ibu bisa melihat langsung cara kerja sistem ini. Anda juga bisa mendapatkan free akses demo aplikasi untuk mempelajari lebih dalam.%0D%0A%0D%0A" .
              "Terima kasih atas perhatian dan waktunya, semoga kami dapat berkontribusi dalam mendukung peningkatan mutu asesmen di LSP Bapak/Ibu.%0D%0A%0D%0A" .
              "Hormat kami,%0D%0A" .
              "Risma%0D%0A" .
              "Moza Asesmen – Moza Soft%0D%0A" .
              "info@mozasoft.com%0D%0A" .
              "+6281 3311 6694%0D%0A" .
              "https://mozasoft.com";
            $mailto = 'mailto:' . rawurlencode($r['email']) . '?subject=' . rawurlencode($subject) . '&body=' . $body;
            ?>
            <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo e($mailto); ?>">Kirim</a>
            <!-- <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo e($r['id']); ?>">Edit</a> -->
            <!-- <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo e($r['id']); ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a> -->
          </td>          
          <td>
              <?php 
                  $emailStatus = $r['status_email'];
                  $dotClass = 'status-empty';

                  if ($emailStatus == 'sent') $dotClass = 'status-sent';
                  else if ($emailStatus == 'unsent') $dotClass = 'status-unsent';
                  else if ($emailStatus == 'diterima') $dotClass = 'status-diterima';
                  else if ($emailStatus == 'ditolak') $dotClass = 'status-ditolak';
              ?>
              <div class="d-flex align-items-center">
                  <select class="status-email form-control" data-id="<?= $r['id']; ?>">
                      <option value="" <?= $emailStatus==''?'selected':''; ?>>Pilih</option>
                      <option value="sent" <?= $emailStatus=='sent'?'selected':''; ?>>Sent</option>
                      <option value="unsent" <?= $emailStatus=='unsent'?'selected':''; ?>>Unsent</option>
                      <option value="diterima" <?= $emailStatus=='diterima'?'selected':''; ?>>Diterima</option>
                      <option value="ditolak" <?= $emailStatus=='ditolak'?'selected':''; ?>>Ditolak</option>
                  </select>
                  <span class="status-dot <?= $dotClass ?>"></span>
              </div>
          </td>
          <td style="text-align:center;">
            <?php           
            // WhatsApp link
            $nohp = preg_replace('/[^0-9]/','', $r['no_hp']);
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
            $wa_text = 
              "Halo Bapak/Ibu pengelola LSP " . $r['nama_lep'] . ", perkenalkan saya Risma dari Moza Asesmen %0D%0A" .
              "Kami mengembangkan aplikasi digital untuk membantu LSP dalam mengelola proses asesmen dan administrasi agar lebih efisien dan terdokumentasi rapi.%0D%0A%0D%0A" .
              "Saya kirimkan juga file PDF singkat berisi penjelasan fitur dan tampilan aplikasinya (tanpa biaya atau komitmen apa pun).%0D%0A%0D%0A" .
              "Kalau Bapak/Ibu berkenan, kami juga bisa jadwalkan demo singkat (±10 menit) agar bisa melihat langsung bagaimana Moza membantu proses asesmen LSP.";
            $wa_url = $nohp ? ('https://api.whatsapp.com/send?phone=' . $nohp . '&text=' . rawurlencode($wa_text)) : '#';
            ?>
            <a class="btn btn-sm btn-success" target="_blank" href="<?php echo e($wa_url); ?>">Kirim</a>
          </td>
          <td>
              <?php 
                  $waStatus = $r['status_wa'];
                  $dotClassWa = 'status-empty';

                  if ($waStatus == 'sent') $dotClassWa = 'status-sent';
                  else if ($waStatus == 'unsent') $dotClassWa = 'status-unsent';
                  else if ($waStatus == 'diterima') $dotClassWa = 'status-diterima';
                  else if ($waStatus == 'ditolak') $dotClassWa = 'status-ditolak';
              ?>
              <div class="d-flex align-items-center">
                  <select class="status-wa form-control" data-id="<?= $r['id']; ?>">
                      <option value="" <?= $waStatus==''?'selected':''; ?>>Pilih</option>
                      <option value="sent" <?= $waStatus=='sent'?'selected':''; ?>>Sent</option>
                      <option value="unsent" <?= $waStatus=='unsent'?'selected':''; ?>>Unsent</option>
                      <option value="diterima" <?= $waStatus=='diterima'?'selected':''; ?>>Diterima</option>
                      <option value="ditolak" <?= $waStatus=='ditolak'?'selected':''; ?>>Ditolak</option>
                  </select>

                  <!-- indikator lingkaran -->
                  <span class="status-dot <?= $dotClassWa ?>"></span>
              </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php if ($hasNextPage): ?>
    <a href="?q=<?= urlencode($q) ?>&field=<?= $field ?>&page=<?= $page + 1 ?>" class="btn btn-primary">
        Next Page →
    </a>
<?php endif; ?>


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
    let dot = $(this).closest('td').find('.status-dot');

    $.ajax({
        url: "update_status.php",
        method: "POST",
        data: { id: id, field: field, value: value },
        success: function (res) {
            console.log("Updated: " + res);
            showNotif();
        }
    });

    // ubah warna dot
    dot.removeClass('status-sent status-unsent status-diterima status-ditolak status-empty');

    if (value == 'sent') dot.addClass('status-sent');
    else if (value == 'unsent') dot.addClass('status-unsent');
    else if (value == 'diterima') dot.addClass('status-diterima');
    else if (value == 'ditolak') dot.addClass('status-ditolak');
    else dot.addClass('status-empty');

});
</script>
