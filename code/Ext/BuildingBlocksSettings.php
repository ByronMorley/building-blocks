<?php

class BuildingBlocksSettings extends DataExtension
{

    private static $db = array(
        'FadeToBlank' => 'boolean'
    );

    private static $has_one = array(
        'BackgroundImage' => 'Image',
    );

    public function updateCMSFields(FieldList $fields)
    {
        /*-- Background image --*/

        $uploadField = UploadField::create('BackgroundImage');
        $uploadField->setFolderName('BackgroundImages');
        $uploadField->getValidator()->setAllowedExtensions(array(
            'png', 'gif', 'jpeg', 'jpg'
        ));

        $fields->addFieldsToTab("Root.Defaults", array($uploadField, CheckboxField::create('FadeToBlank')));


    }

}