<?php
if (DB::connection()->getPdo()) {
    echo 'Successfully connected to DB and DB name is: ' . DB::connection()->getDatabaseName();
}
else{
    echo 'Not connected';
}
?>
