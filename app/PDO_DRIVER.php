<?


class PDO_DRIVER {

    protected $pdo;

    public function __construct($pdo_connection)
    {
        $this->pdo = $pdo_connection;
    }

    public function query($QUERY, $PARAMS)
    {
        $PDO = $this->pdo;
        $res = $PDO->prepare($QUERY);
        $res->execute($PARAMS);
        while ($row = $res->fetch(PDO::FETCH_ASSOC))
        {
            $result[] = $row;
        }
        return $result;
    }

    public function read($TABLE, $CODE)
    {
        $PDO = $this->pdo;
        $res = $PDO->prepare("SELECT * FROM ".$TABLE." WHERE code = ?");
        $res->execute(array($CODE));
        $result = $res->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readAll($TABLE)
    {
        $PDO   = $this->pdo;
        $result = array();
        $res = $PDO->query('SELECT * FROM '.$TABLE);
        while ($row = $res->fetch(PDO::FETCH_ASSOC))
        {
            $result[] = $row;
        }
        return $result;
    }

    public function getCount($TABLE)
    {
        $PDO    = $this->pdo;
        $result = array();
        $res    = $PDO->query('SELECT count(*) FROM '.$TABLE);
        $row    = $res->fetch(PDO::FETCH_NUM);
        return $row[0];
    }

    // gets Fields Name from data array
    public function getFields($data){
        $arrFields = array();
        foreach($data as $key=>$val){
            $arrFields[] = $key;
        }
        return $arrFields;
    }

    // gets Values from data array
    public function getValues($data){
        $arrValues = array();
        foreach($data as $key=>$val){
            $arrValues[] = $val;
        }
        return $arrValues;
    }

    // Helper function it makes string for request
    public function pdoSet($fields, &$values, $source = array()) {
        $set = '';
        $values = array();
        if (!$source) $source = &$_POST;
        foreach ($fields as $field) {
            if (isset($source[$field])) {
                $set.="`".str_replace("`","``",$field)."`". "=:$field, ";
                $values[$field] = $source[$field];
            }
        }
        return substr($set, 0, -2);
    }
}
