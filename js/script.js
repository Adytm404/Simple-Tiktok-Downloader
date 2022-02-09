document.getElementById('tombol').onclick = function() {
    window.location = "download.php?id=" + document.getElementById('link').value;
    return false;
      }
