<?php

class Contact
{
    /*
     * Should be improved to implement repository pattern.
     * Separate the entity manager.
     * Domain model (Contact) should be separated from the Business logic (ContactRepository).
     */

    public function __construct($data)
    {
        $this->firstName = $data["firstName"];
        $this->lastName = $data["lastName"];
        $this->phone = $data["phone"];
    }

    public static function all()
    {
        $contacts = [];
        //Parse file.
        $contactsCSV = explode(";", file_get_contents("contacts.csv"));
        foreach ($contactsCSV as $contact)
        {
            $tmp = explode(",", $contact);

            if (count($tmp) === 3) 
            {
                array_push($contacts, new Contact(["firstName"  =>  $tmp[0],
                                                   "lastName"   =>  $tmp[1],
                                                   "phone"      =>  $tmp[2]
                                                ]));
            }
        }

        return $contacts;
    }

    public static function create($data)
    {
        //Save to file.
        $dataCSVString = $data["firstName"]. "," .$data["lastName"]. ",". $data["phone"] . ";\n";
        file_put_contents("contacts.csv", $dataCSVString, FILE_APPEND | LOCK_EX);
    }
}