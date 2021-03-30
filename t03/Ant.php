<?

class Ant
{
    public $name;
    public $role_in_army;
    public $date_of_entry;
    public $number_of_fights;
    public $number_of_legs;

    public function __construct($name, $role_in_army, $date_of_entry, $number_of_fights, $number_of_legs)
    {
        $this->name = $name;
        $this->role_in_army = $role_in_army;
        $this->date_of_entry = $date_of_entry;
        $this->number_of_fights = $number_of_fights;
        $this->number_of_legs = $number_of_legs;
    }

    public function __serialize()
    {
        return [
            'name' => $this->name,
            'role_in_army' => $this->role_in_army,
            'date_of_entry' => $this->date_of_entry,
            'number_of_fights' => $this->number_of_fights,
            'number_of_legs' => $this->number_of_legs,
        ];
    }

    private function connect()
    {
        return "";
    }

    public function __unserialize($data)
    {

        $this->name = $data['name'];
        $this->role_in_army = $data['role_in_army'];
        $this->date_of_entry = $data['date_of_entry'];
        $this->number_of_fights = $data['number_of_fights'];
        $this->number_of_legs = $data['number_of_legs'];
        return $this->connect();
    }

}

$ant = new Ant("Anthony", "sergeant", "2015-07-16", 1, 4);
$serialized = serialize($ant);
echo $serialized . "\n\n";
$unserialized = unserialize($serialized);
echo $unserialized;