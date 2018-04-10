<?php
  class MemberExtension extends DataExtension{
    private static $db = array(
        'LastVisited' => 'Datetime',
        'NumVisit' => 'Int',
        'UnitNum'=>'enum("1,2,3,4,5,6,7,8,9")'
    );

    public function memberLoggedIn() {
        $this->logVisit();
    }

    public function memberAutoLoggedIn() {
        $this->logVisit();
    }

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Main', array(
            ReadonlyField::create('LastVisited', 'Last visited'),
            ReadonlyField::create('NumVisit', 'Number of visits')
        ));
    }

    protected function logVisit() {
        if(!Security::database_is_ready()) return;

        DB::query(sprintf(
            'UPDATE "Member" SET "LastVisited" = %s, "NumVisit" = "NumVisit" + 1 WHERE "ID" = %d',
            DB::get_conn()->now(),
            $this->owner->ID
        ));
    }
  }


 ?>
