<?php

/**
 * This is the model class for table "{{booking}}".
 *
 * The followings are the available columns in table '{{booking}}':
 * @property string $id
 * @property string $full_name
 * @property string $present_address
 * @property integer $nationality
 * @property string $email
 * @property string $phone
 * @property string $service_type
 * @property string $car_type
 * @property integer $number_of_people
 * @property string $passport_no
 * @property string $national_id_no
 * @property string $trip_start
 * @property string $trip_end
 * @property string $message
 * @property string $created_on
 */
class Booking extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Booking the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{booking}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('full_name, present_address, email, car_type, number_of_people, trip_start, trip_end, message', 'required'),
            array('nationality, number_of_people', 'numerical', 'integerOnly' => true),
            array('full_name', 'length', 'max' => 250),
            array('email,service_type', 'length', 'max' => 100),
            array('phone, passport_no, national_id_no', 'length', 'max' => 50),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, full_name, present_address, nationality, email, phone, service_type, car_type, number_of_people, passport_no, national_id_no, trip_start, trip_end, message, created_on', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'full_name' => 'Full Name',
            'present_address' => 'Present Address',
            'nationality' => 'Nationality',
            'email' => 'Email',
            'phone' => 'Phone',
            'service_type' => 'Service Type',
            'car_type' => 'Car Type',
            'number_of_people' => 'Number Of People',
            'passport_no' => 'Passport No',
            'national_id_no' => 'National Id No',
            'trip_start' => 'Trip Start',
            'trip_end' => 'Trip End',
            'message' => 'Message',
            'created_on' => 'Created On',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('full_name', $this->full_name, true);
        $criteria->compare('present_address', $this->present_address, true);
        $criteria->compare('nationality', $this->nationality);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('service_type', $this->service_type);
        $criteria->compare('car_type', $this->car_type);
        $criteria->compare('number_of_people', $this->number_of_people);
        $criteria->compare('passport_no', $this->passport_no, true);
        $criteria->compare('national_id_no', $this->national_id_no, true);
        $criteria->compare('trip_start', $this->trip_start, true);
        $criteria->compare('trip_end', $this->trip_end, true);
        $criteria->compare('message', $this->message, true);
        $criteria->compare('created_on', $this->created_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}