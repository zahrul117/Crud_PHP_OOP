<?php
include "aksi.php";
$db = new aksi();
$id = $_GET['id'];
$result = $db->hapus($id);
echo "
<script>
alert('Data berhasil dihapus');
window.location.href='index.php';
</script>
";
