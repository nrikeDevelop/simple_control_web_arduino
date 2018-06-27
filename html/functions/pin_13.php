<?php 

//BASE DE DATOS, OPCIONAL, EN PROCESO

$servername = "";
$username = "";
$password = "";
$db = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully\n";

$sql = "SELECT STATE FROM lights where LED = 13";
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "STATE: " . $row["STATE"]. "\n";
        $STATE = $row["STATE"];
    }
} else {
    echo "0 results";
}

switch ($STATE) {
	case 1:
		$sql = "UPDATE lights SET STATE = 0 where LED = 13";

		if ($conn->query($sql) === TRUE) {
    		echo "Record updated successfully\n";
		} else {
    		echo "Error updating record: " . $conn->error;
		}

		echo "Encendido para apagar\n";

		shell_exec("python ./ledOff.py"); 


		break;
	
	case 0:
		$sql = "UPDATE lights SET STATE = 1 where LED = 13";

		if ($conn->query($sql) === TRUE) {
    		echo "Record updated successfully\n";
		} else {
    		echo "Error updating record: " . $conn->error;
		}

		echo "Apagado para encender\n";

		shell_exec("python ./ledOn.py"); 

		break;
}

$conn->close();

?>
