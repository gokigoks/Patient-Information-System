<?php

use Illuminate\Database\Seeder;

class SeedMedSpecialtiesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('medspecialties')->delete();

        $specialties = [
            [
               'med_specialty' => 'Allergy & Immunology',
               'med_desc'=>'Allergic and immunologic diseases and their respiratory complications (such as pollen, chemical and food allergies, asthma and AIDS).'
            ],
            [
               'med_specialty' => 'Anesthesia',
               'med_desc'=>'Anesthesia or relief of pain during surgery and childbirth, and control of paid due to various causes.'            
            ],
            [
            	'med_specialty' => 'Cardiology',
               'med_desc'=>'Diseases of the heart and blood vessels.'            
            ],
            [
            	'med_specialty' => 'Dermatology',
               'med_desc'=>'Diseases of the skin.'            
            ],
            [
            	'med_specialty' => 'Emergency Medicine',
               'med_desc'=>'Diseases that are acute medical or surgical conditions or injuries that require urgent or immediate care (usually in a hospital emergency room).'            
            ],
            [
            	'med_specialty' => 'Endocrinology and Metabolism',
               'med_desc'=>'Diseases of the internal glands of the body, including diabetes mellitus.'            
            ],
            [
            	'med_specialty' => 'Family Practice',
               'med_desc'=>'All diseases and related total health care of an individual and the family.'            
            ],
            [
            	'med_specialty' => 'Gastroenterology',
               'med_desc'=>'Diseases of the digestive tract, including the stomach, bowel, liver and pancreas.'            
            ],
            [
            	'med_specialty' => 'General Practice',
               'med_desc'=>'All diseases and related total health care of an individual and the family.'            
            ],
            [
            	'med_specialty' => 'Geriatric Medicine',
               'med_desc'=>'Diseases of the elderly.'            
            ],
            [
            	'med_specialty' => 'Obstetrics and Gynecology',
               'med_desc'=>'Normal and abnormal pregnancy, diseases of the female reproductive system and fertility disorders.'            
            ]
        ];

        App\MedSpecialty::insert($specialties);
    }
}


/*source:http://www.mclarenhealthplan.org/HealthAdvantage/AListofDefinitionsofMedicalSpecialtiesAdv.aspx*/