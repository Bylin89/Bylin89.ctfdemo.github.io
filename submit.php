<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$line = $_POST['line'];
	$name = $_POST['name'];

	if ($line == "sherlocked" && $name == "Irene Adler") {
		echo '<html><head><meta charset="utf-8"><title>CTF flag</title><style>center{margin-top: 200px;text-align: center;}</style></head><body><center><p>Congratulations.</p><p>CTF_{DoCuMeNtS}</p></center></body></html>';
	} else {
        echo '<script>alert("Please try again.");
        window.location.href = "index.html";
        </script>';
	}
}
?>
