<?

class Avenger
{
    public $name;
    public $hero_name;
    public $gender;
    public $age;
    public $super_abilities;
    public $hp;

    public function __construct($name, $hero_name, $gender, $age, $super_abilities, $hp)
    {
        $this->name = $name;
        $this->hero_name = $hero_name;
        $this->gender = $gender;
        $this->age = $age;
        $this->super_abilities = $super_abilities;
        $this->hp = $hp;
    }

    public function __toString()
    {

        return "name: " . $this->name . "\ngender: " . $this->gender . "\nage: " . $this->age . "\n";
    }

    public function __invoke()
    {
        $str = '';
        $str .= $this->hero_name . "\n";
        foreach ($this->super_abilities as $value) {
            $str .= $value . "\n";
        }

        echo $str;
    }
}

class Team
{
    public $id;
    public $avengers;
    private $number_of_dead;

    public function __construct($id, $avengers)
    {
        $this->id = $id;
        $this->avengers = $avengers;
        $this->number_of_dead = 0;
    }

    public function battle($damage): void
    {
        $this->number_of_dead = 0;
        foreach ($this->avengers as $key => $value) {
            $value->hp -= $damage;
            if ($value->hp <= 0) {
                $this->number_of_dead++;
                unset($this->avengers[$key]);
            }
        }
    }

    public function calculate_losses($damage): void
    {
        if ($this->number_of_dead == 0) {
            echo "We haven't lost anyone in this battle!\n";
        } else {
            echo "In this battle we lost $this->number_of_dead Avenger(s).\n";
        }
    }
}

// $arr = array();
// $arr[0] = new Avenger("Tony Stark", "Iron Man", "man", 38, ["intelligence", "durability", "magnetism"], 120);
// $arr[1] = new Avenger("Natasha Romanoff", "Black Widow", "woman", 35, ["agility", "martial arts"], 75);
// $arr[2] = new Avenger("Carol Danvers", "Captain Marvel", "woman", 27, ["durability", "flight", "interstellar travel"], 95);
// $team = new Team(1, $arr);
// echo "Battle 1\n";
// $cloned_team = clone $team;
// $damage = 25;
// $team->battle($damage);
// $team->calculate_losses($cloned_team);
// echo "\nBattle 2\n";
// $cloned_team = clone $team;
// $damage = 80;
// $team->battle($damage);
// $team->calculate_losses($cloned_team);