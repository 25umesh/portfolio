const express = require('express');
const path = require('path');

const app = express();
app.disable('x-powered-by'); // removes Express watermark/header

const PORT = process.env.PORT || 3000;

// Serve static files (CSS, images, etc.)
app.use(express.static(path.join(__dirname)));

// Default route
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html'));
});

app.listen(PORT, () => {
  console.log(`Portfolio app is running at http://localhost:${PORT}`);
});
