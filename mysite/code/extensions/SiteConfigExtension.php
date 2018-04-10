<?php

class SiteConfigExtension extends DataExtension{
  private static $has_one=[
    'logo'=>'Image'
  ];

  public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab("Root.Main",
            UploadField::create(
              'logo',
              'logo'
            )
        );
    }
}
