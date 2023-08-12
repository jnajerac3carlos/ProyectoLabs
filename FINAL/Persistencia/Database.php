<?php

require_once 'Constants.php';

class Database {
    private $connection;

    public function connect() {
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        if ($this->connection->connect_error) {
            throw new Exception("Connection error: " . $this->connection->connect_error);
        }

        return $this->connection;
    }

    public function close() {
        if($this->connection) {
            $this->connection->close();
        }
    }

    public function executeProcedure($procedureName, $params = []) {
        try {
            $types = '';
            $values = [];

            foreach ($params as $param) {
                $types .= $param->type;
                $values[] = &$param->value;
            }

            $placeholders = implode(',', array_fill(0, count($params), '?'));
            $stmt = $this->connection->prepare("CALL $procedureName($placeholders)");

            if ($stmt === false) {
                throw new Exception("Statement preparation error: " . $this->connection->error);
            }

            if (!empty($types) && !empty($values)) {
                $stmt->bind_param($types, ...$values);
            }

            $stmt->execute();

            return $stmt->get_result();

        } catch (Exception $e) {
            $this->logException($e->getMessage());
            throw $e;
        } finally {
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    public function logException($exceptionMessage) {
        $currentTime = date("Y-m-d H:i:s");
        $params = [
            new Parameter(PARAM_STR, $exceptionMessage),
            new Parameter(PARAM_STR, $currentTime)
        ];
        $this->executeProcedure('LogException', $params);
    }

    public function logMessage($message) {
        $currentTime = date("Y-m-d H:i:s");
        $params = [
            new Parameter(PARAM_STR, $message),
            new Parameter(PARAM_STR, $currentTime)
        ];
        $this->executeProcedure('LogMessage', $params);
    }
}
?>