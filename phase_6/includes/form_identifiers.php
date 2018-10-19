<?php
  $formIdentifiers = array(//Dynamically Adjust Form Here
    'BasicInformation' => array('Name' => array('birthName'  => 'Birth Name',
                                                 'familyName' => 'Family Name'
                                                ),
                                 'Contact Information' => array('email' => 'E-mail @',
                                                                'phone' => 'Phone #'
                                                               )
                                ),
    'HomeAddress' => array('Information' => array('addressNum' => 'Address #',
                                                   'street' => 'Street',
                                                   'city' => 'City',
                                                   'prov' => 'Province',
                                                   'country' => 'Country',
                                                   'postCode' => 'Postal Code'
                                                  )
                           ),
    'PersonalInformation' => array('Information' => array('birthDate' => 'Date of Birth',
                                                           'race' => 'Race',
                                                           'ethnic' => 'Ethnicity',
                                                           'dlNum' => 'Driver\'s License Number'
                                                          )
                                   )
                          );
  //Translate form PHP to Javscript
  echo '<script> let formIdentifiers = ' . Json_encode($formIdentifiers) . '</script>';
?>
