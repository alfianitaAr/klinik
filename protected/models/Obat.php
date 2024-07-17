<?php

/**
 * This is the model class for table "obat".
 *
 * The followings are the available columns in table 'obat':
 * @property integer $id_obat
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property string $guna_obat
 * @property string $pantangan
 * @property string $keterangan
 */
class Obat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_obat, jenis_obat, guna_obat, pantangan, keterangan', 'required'),
			array('nama_obat, jenis_obat, guna_obat, pantangan', 'length', 'max'=>255),
			array('keterangan', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_obat, nama_obat, jenis_obat, guna_obat, pantangan, keterangan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_obat' => 'Id Obat',
			'nama_obat' => 'Nama Obat',
			'jenis_obat' => 'Jenis Obat',
			'guna_obat' => 'Guna Obat',
			'pantangan' => 'Pantangan',
			'keterangan' => 'Keterangan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('nama_obat',$this->nama_obat,true);
		$criteria->compare('jenis_obat',$this->jenis_obat,true);
		$criteria->compare('guna_obat',$this->guna_obat,true);
		$criteria->compare('pantangan',$this->pantangan,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
