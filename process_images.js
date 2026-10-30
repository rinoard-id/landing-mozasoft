const sharp = require('sharp');
const fs = require('fs');

async function processImages() {
  const width = 1920;
  const height = 1080;

  // Create SVG background matching back.png warm gradient theme
  const svgBackground = `
    <svg width="${width}" height="${height}" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="bgGrad" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="#4d2c1d" />
          <stop offset="50%" stop-color="#6e4530" />
          <stop offset="100%" stop-color="#8c583f" />
        </linearGradient>
      </defs>
      <rect width="100%" height="100%" fill="url(#bgGrad)" />
    </svg>
  `;

  const images = [
    { file: '1.png', title: 'colorsort-gameplay-1.png' },
    { file: '2.png', title: 'colorsort-gameplay-2.png' },
    { file: '3.png', title: 'colorsort-gameplay-3.png' }
  ];

  for (const item of images) {
    if (!fs.existsSync(item.file)) continue;

    // Read source image metadata
    const srcImage = sharp(item.file);
    const meta = await srcImage.metadata();

    // Target dimensions for inner window content (e.g., max width 1200, max height 800)
    const maxW = 1100;
    const maxH = 750;
    
    let w = meta.width;
    let h = meta.height;
    if (w > maxW) {
      h = Math.round(h * (maxW / w));
      w = maxW;
    }
    if (h > maxH) {
      w = Math.round(w * (maxH / h));
      h = maxH;
    }

    // Resize source image
    const resizedBuffer = await srcImage.resize(w, h).toBuffer();

    const windowHeaderHeight = 44;
    const totalWindowW = w;
    const totalWindowH = h + windowHeaderHeight;

    // Create macOS window container SVG
    const windowSvg = `
      <svg width="${totalWindowW}" height="${totalWindowH}" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
            <feDropShadow dx="0" dy="25" stdDeviation="30" flood-color="#000000" flood-opacity="0.45"/>
          </filter>
        </defs>
        <rect x="10" y="10" width="${totalWindowW - 20}" height="${totalWindowH - 20}" rx="20" ry="20" fill="#f0f0f2" filter="url(#shadow)" opacity="0.95" />
        <!-- Top bar -->
        <path d="M 30 10 L ${totalWindowW - 30} 10 Q ${totalWindowW - 10} 10 ${totalWindowW - 10} 30 L ${totalWindowW - 10} ${windowHeaderHeight + 10} L 10 ${windowHeaderHeight + 10} L 10 30 Q 10 10 30 10 Z" fill="#f0f0f2" />
        <!-- Window buttons -->
        <circle cx="35" cy="32" r="6" fill="#ff5f56" />
        <circle cx="55" cy="32" r="6" fill="#ffbd2e" />
        <circle cx="75" cy="32" r="6" fill="#27c93f" />
        <!-- Title -->
        <text x="${totalWindowW / 2}" y="37" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="13" fill="#6e6e73" text-anchor="middle" font-weight="500">${item.title}</text>
        <!-- Divider -->
        <line x1="10" y1="${windowHeaderHeight + 10}" x2="${totalWindowW - 10}" y2="${windowHeaderHeight + 10}" stroke="#e0e0e2" stroke-width="1" />
      </svg>
    `;

    const windowBuffer = await sharp(Buffer.from(windowSvg)).png().toBuffer();

    // Composite background + window frame + resized image
    const left = Math.round((width - totalWindowW) / 2);
    const top = Math.round((height - totalWindowH) / 2);

    await sharp(Buffer.from(svgBackground))
      .composite([
        { input: windowBuffer, left: left, top: top },
        { input: resizedBuffer, left: left, top: top + windowHeaderHeight }
      ])
      .toFile(item.file + '.tmp');

    fs.renameSync(item.file + '.tmp', item.file);
    console.log(`Successfully styled ${item.file} to match back.png presentation.`);
  }
}

processImages().catch(err => {
  console.error(err);
  process.exit(1);
});
