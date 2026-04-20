<?php

namespace Database\Seeders;

use App\Models\CertificateDepartment;
use App\Models\Certificate;
use App\Models\Department;
use App\Models\Gender;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\SchoolClass;
use App\Models\Section;
use App\Models\Subject;
use App\Models\SubjectCertificate;
use App\Models\SubjectDepartment;
use App\Models\Term;
use App\Models\User;
use App\Models\Teacher;
use Database\Factories\SchoolClassFactory;
use Database\Factories\TeacherFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Gender::factory()->createMany([
            ["name"=>"Male"],
            ["name"=>"Female"]
            
        ]);
        Nationality::factory()->create([
            "name"=>"lebanon"
        ]);
        Certificate::factory()->createMany([
            ["name"=>"EB1"],
            ["name"=>"EB2"],
            ["name"=>"EB3"],
            ["name"=>"EB4"],
            ["name"=>"EB5"],
            ["name"=>"EB6"],
            ["name"=>"EB7"],
            ["name"=>"EB8"],
            ["name"=>"Brevet"],
            ["name"=>"Second"],
            ["name"=>"Bac1"],
            ["name"=>"Bac2"]
        ]);
        Language::factory()->createMany([
            ["name"=>"English"],
            ["name"=>"Frensh"]
        ]);
        Section::factory()->createMany([
            ["name"=>"A"],
            ["name"=>"B"],
            ["name"=>"C"],
            ["name"=>"D"]
        ]);
        Subject::factory()->createMany([
            ["name"=>"Arabic"],
            ["name"=>"Language"],
            ["name"=>"Math"],
            ["name"=>"Science"],
            ["name"=>"physics"],
            ["name"=>"Chemistry"],
            ["name"=>"Biology"],
            ["name"=>"History"],
            ["name"=>"Geography"],
            ["name"=>"Educational"],
            ["name"=>"Sport"],
            ["name"=>"Philsophy"],
            ["name"=>"Economy"],
            ["name"=>"Secology"],
            ["name"=>"Art"]
        ]);
        Term::factory()->createMany([
            ["name"=>"First Semester",
            "start_date"=>"2024-9-1",
            "end_date"=>"2025-1-1"
            ],
            ["name"=>"second Semester",
            "start_date"=>"2025-1-2",
            "end_date"=>"2025-3-1"
            ],
            ["name"=>"Third Semester",
            "start_date"=>"2025-3-2",
            "end_date"=>"2024-6-1"
            ],
            
        ]);
        Department::factory()->createMany([
            ["name"=>"Scientific","code"=>"S"],
            ["name"=>"Literary","code"=>"L"],
            ["name"=>"General Science","code"=>"GS"],
            ["name"=>"Life Science","code"=>"LS"],
            ["name"=>"Economy and Society","code"=>"ES"],
            ["name"=>"Etiquette and Human","code"=>"EH"],
            ["name"=>"Not Specified","code"=>"NS"],
        ]);
        CertificateDepartment::factory()->createMany([
            ["certificate_id"=>1,"department_id"=>7],
            ["certificate_id"=>2,"department_id"=>7],
            ["certificate_id"=>3,"department_id"=>7],
            ["certificate_id"=>4,"department_id"=>7],
            ["certificate_id"=>5,"department_id"=>7],
            ["certificate_id"=>6,"department_id"=>7],
            ["certificate_id"=>7,"department_id"=>7],
            ["certificate_id"=>8,"department_id"=>7],
            ["certificate_id"=>9,"department_id"=>7],
            ["certificate_id"=>10,"department_id"=>7],
            ["certificate_id"=>11,"department_id"=>1],
            ["certificate_id"=>11,"department_id"=>2],
            ["certificate_id"=>12,"department_id"=>3],
            ["certificate_id"=>12,"department_id"=>4],
            ["certificate_id"=>12,"department_id"=>5],
            ["certificate_id"=>12,"department_id"=>6]
        ]);
        SubjectCertificate::factory()->createMany([
            ["certificate_id"=>"1","subject_id"=>"1"],
            ["certificate_id"=>"1","subject_id"=>"2"],
            ["certificate_id"=>"1","subject_id"=>"3"],
            ["certificate_id"=>"1","subject_id"=>"11"],
            ["certificate_id"=>"1","subject_id"=>"15"],
            ["certificate_id"=>"2","subject_id"=>"1"],
            ["certificate_id"=>"2","subject_id"=>"2"],
            ["certificate_id"=>"2","subject_id"=>"3"],
            ["certificate_id"=>"2","subject_id"=>"4"],
            ["certificate_id"=>"2","subject_id"=>"11"],
            ["certificate_id"=>"2","subject_id"=>"15"],
            ["certificate_id"=>"3","subject_id"=>"1"],
            ["certificate_id"=>"3","subject_id"=>"2"],
            ["certificate_id"=>"3","subject_id"=>"3"],
            ["certificate_id"=>"3","subject_id"=>"4"],
            ["certificate_id"=>"3","subject_id"=>"10"],
            ["certificate_id"=>"3","subject_id"=>"11"],
            ["certificate_id"=>"3","subject_id"=>"15"],
            ["certificate_id"=>"4","subject_id"=>"1"],
            ["certificate_id"=>"4","subject_id"=>"2"],
            ["certificate_id"=>"4","subject_id"=>"3"],
            ["certificate_id"=>"4","subject_id"=>"4"],
            ["certificate_id"=>"4","subject_id"=>"8"],
            ["certificate_id"=>"4","subject_id"=>"9"],
            ["certificate_id"=>"4","subject_id"=>"10"],
            ["certificate_id"=>"4","subject_id"=>"11"],
            ["certificate_id"=>"4","subject_id"=>"15"],
            ["certificate_id"=>"5","subject_id"=>"1"],
            ["certificate_id"=>"5","subject_id"=>"2"],
            ["certificate_id"=>"5","subject_id"=>"3"],
            ["certificate_id"=>"5","subject_id"=>"4"],
            ["certificate_id"=>"5","subject_id"=>"8"],
            ["certificate_id"=>"5","subject_id"=>"9"],
            ["certificate_id"=>"5","subject_id"=>"10"],
            ["certificate_id"=>"5","subject_id"=>"11"],
            ["certificate_id"=>"5","subject_id"=>"15"],
            ["certificate_id"=>"6","subject_id"=>"1"],
            ["certificate_id"=>"6","subject_id"=>"2"],
            ["certificate_id"=>"6","subject_id"=>"3"],
            ["certificate_id"=>"6","subject_id"=>"4"],
            ["certificate_id"=>"6","subject_id"=>"8"],
            ["certificate_id"=>"6","subject_id"=>"9"],
            ["certificate_id"=>"6","subject_id"=>"10"],
            ["certificate_id"=>"6","subject_id"=>"11"],
            ["certificate_id"=>"6","subject_id"=>"15"],
            ["certificate_id"=>"7","subject_id"=>"1"],
            ["certificate_id"=>"7","subject_id"=>"2"],
            ["certificate_id"=>"7","subject_id"=>"3"],
            ["certificate_id"=>"7","subject_id"=>"5"],
            ["certificate_id"=>"7","subject_id"=>"6"],
            ["certificate_id"=>"7","subject_id"=>"7"],
            ["certificate_id"=>"7","subject_id"=>"8"],
            ["certificate_id"=>"7","subject_id"=>"9"],
            ["certificate_id"=>"7","subject_id"=>"10"],
            ["certificate_id"=>"7","subject_id"=>"11"],
            ["certificate_id"=>"8","subject_id"=>"1"],
            ["certificate_id"=>"8","subject_id"=>"2"],
            ["certificate_id"=>"8","subject_id"=>"3"],
            ["certificate_id"=>"8","subject_id"=>"5"],
            ["certificate_id"=>"8","subject_id"=>"6"],
            ["certificate_id"=>"8","subject_id"=>"7"],
            ["certificate_id"=>"8","subject_id"=>"8"],
            ["certificate_id"=>"8","subject_id"=>"9"],
            ["certificate_id"=>"8","subject_id"=>"10"],
            ["certificate_id"=>"8","subject_id"=>"11"],
            ["certificate_id"=>"9","subject_id"=>"1"],
            ["certificate_id"=>"9","subject_id"=>"2"],
            ["certificate_id"=>"9","subject_id"=>"3"],
            ["certificate_id"=>"9","subject_id"=>"5"],
            ["certificate_id"=>"9","subject_id"=>"6"],
            ["certificate_id"=>"9","subject_id"=>"7"],
            ["certificate_id"=>"9","subject_id"=>"8"],
            ["certificate_id"=>"9","subject_id"=>"9"],
            ["certificate_id"=>"9","subject_id"=>"10"],
            ["certificate_id"=>"10","subject_id"=>"1"],
            ["certificate_id"=>"10","subject_id"=>"2"],
            ["certificate_id"=>"10","subject_id"=>"3"],
            ["certificate_id"=>"10","subject_id"=>"5"],
            ["certificate_id"=>"10","subject_id"=>"6"],
            ["certificate_id"=>"10","subject_id"=>"7"],
            ["certificate_id"=>"10","subject_id"=>"8"],
            ["certificate_id"=>"10","subject_id"=>"9"],
            ["certificate_id"=>"10","subject_id"=>"10"],
            ["certificate_id"=>"10","subject_id"=>"11"],
            ["certificate_id"=>"11","subject_id"=>"1"],
            ["certificate_id"=>"11","subject_id"=>"2"],
            ["certificate_id"=>"11","subject_id"=>"3"],
            ["certificate_id"=>"11","subject_id"=>"5"],
            ["certificate_id"=>"11","subject_id"=>"6"],
            ["certificate_id"=>"11","subject_id"=>"7"],
            ["certificate_id"=>"11","subject_id"=>"8"],
            ["certificate_id"=>"11","subject_id"=>"9"],
            ["certificate_id"=>"11","subject_id"=>"10"],
            ["certificate_id"=>"11","subject_id"=>"11"],
            ["certificate_id"=>"12","subject_id"=>"1"],
            ["certificate_id"=>"12","subject_id"=>"2"],
            ["certificate_id"=>"12","subject_id"=>"3"],
            ["certificate_id"=>"12","subject_id"=>"5"],
            ["certificate_id"=>"12","subject_id"=>"6"],
            ["certificate_id"=>"12","subject_id"=>"7"],
            ["certificate_id"=>"12","subject_id"=>"8"],
            ["certificate_id"=>"12","subject_id"=>"9"],
            ["certificate_id"=>"12","subject_id"=>"10"],
            ["certificate_id"=>"12","subject_id"=>"11"],

        ]);
        Teacher::factory(50)->create();
        SchoolClass::factory()->createMany([
            ["language_id"=>"1","certificate_id"=>"1","section_id"=>"1","department_id"=>"7","room_number"=>"1","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"1","section_id"=>"2","department_id"=>"7","room_number"=>"2","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"1","section_id"=>"3","department_id"=>"7","room_number"=>"3","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"1","section_id"=>"1","department_id"=>"7","room_number"=>"4","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"1","section_id"=>"2","department_id"=>"7","room_number"=>"5","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"1","section_id"=>"3","department_id"=>"7","room_number"=>"6","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"2","section_id"=>"1","department_id"=>"7","room_number"=>"7","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"2","section_id"=>"2","department_id"=>"7","room_number"=>"8","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"2","section_id"=>"3","department_id"=>"7","room_number"=>"9","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"2","section_id"=>"1","department_id"=>"7","room_number"=>"10","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"2","section_id"=>"2","department_id"=>"7","room_number"=>"11","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"2","section_id"=>"3","department_id"=>"7","room_number"=>"12","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"3","section_id"=>"1","department_id"=>"7","room_number"=>"13","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"3","section_id"=>"2","department_id"=>"7","room_number"=>"14","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"3","section_id"=>"3","department_id"=>"7","room_number"=>"15","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"3","section_id"=>"1","department_id"=>"7","room_number"=>"16","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"3","section_id"=>"2","department_id"=>"7","room_number"=>"17","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"3","section_id"=>"3","department_id"=>"7","room_number"=>"18","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"4","section_id"=>"1","department_id"=>"7","room_number"=>"19","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"4","section_id"=>"2","department_id"=>"7","room_number"=>"20","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"4","section_id"=>"3","department_id"=>"7","room_number"=>"21","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"4","section_id"=>"1","department_id"=>"7","room_number"=>"22","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"4","section_id"=>"2","department_id"=>"7","room_number"=>"23","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"4","section_id"=>"3","department_id"=>"7","room_number"=>"24","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"5","section_id"=>"1","department_id"=>"7","room_number"=>"25","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"5","section_id"=>"2","department_id"=>"7","room_number"=>"26","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"5","section_id"=>"3","department_id"=>"7","room_number"=>"27","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"5","section_id"=>"1","department_id"=>"7","room_number"=>"28","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"5","section_id"=>"2","department_id"=>"7","room_number"=>"29","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"5","section_id"=>"3","department_id"=>"7","room_number"=>"30","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"6","section_id"=>"1","department_id"=>"7","room_number"=>"31","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"6","section_id"=>"2","department_id"=>"7","room_number"=>"32","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"6","section_id"=>"3","department_id"=>"7","room_number"=>"33","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"6","section_id"=>"1","department_id"=>"7","room_number"=>"34","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"6","section_id"=>"2","department_id"=>"7","room_number"=>"35","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"6","section_id"=>"3","department_id"=>"7","room_number"=>"36","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"7","section_id"=>"1","department_id"=>"7","room_number"=>"37","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"7","section_id"=>"2","department_id"=>"7","room_number"=>"38","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"7","section_id"=>"3","department_id"=>"7","room_number"=>"39","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"7","section_id"=>"1","department_id"=>"7","room_number"=>"40","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"7","section_id"=>"2","department_id"=>"7","room_number"=>"41","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"7","section_id"=>"3","department_id"=>"7","room_number"=>"42","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"8","section_id"=>"1","department_id"=>"7","room_number"=>"43","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"8","section_id"=>"2","department_id"=>"7","room_number"=>"44","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"8","section_id"=>"3","department_id"=>"7","room_number"=>"45","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"8","section_id"=>"1","department_id"=>"7","room_number"=>"46","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"8","section_id"=>"2","department_id"=>"7","room_number"=>"47","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"8","section_id"=>"3","department_id"=>"7","room_number"=>"48","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"9","section_id"=>"1","department_id"=>"7","room_number"=>"49","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"9","section_id"=>"2","department_id"=>"7","room_number"=>"50","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"9","section_id"=>"3","department_id"=>"7","room_number"=>"51","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"9","section_id"=>"1","department_id"=>"7","room_number"=>"52","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"9","section_id"=>"2","department_id"=>"7","room_number"=>"53","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"9","section_id"=>"3","department_id"=>"7","room_number"=>"54","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"10","section_id"=>"1","department_id"=>"7","room_number"=>"55","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"10","section_id"=>"2","department_id"=>"7","room_number"=>"56","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"10","section_id"=>"3","department_id"=>"7","room_number"=>"57","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"10","section_id"=>"1","department_id"=>"7","room_number"=>"58","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"10","section_id"=>"2","department_id"=>"7","room_number"=>"59","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"10","section_id"=>"3","department_id"=>"7","room_number"=>"60","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"11","section_id"=>"1","department_id"=>"1","room_number"=>"61","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"11","section_id"=>"2","department_id"=>"1","room_number"=>"62","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"11","section_id"=>"3","department_id"=>"1","room_number"=>"63","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"11","section_id"=>"1","department_id"=>"1","room_number"=>"64","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"11","section_id"=>"2","department_id"=>"1","room_number"=>"65","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"11","section_id"=>"3","department_id"=>"1","room_number"=>"66","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"11","section_id"=>"1","department_id"=>"2","room_number"=>"67","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"11","section_id"=>"2","department_id"=>"2","room_number"=>"68","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"11","section_id"=>"3","department_id"=>"2","room_number"=>"69","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"11","section_id"=>"1","department_id"=>"2","room_number"=>"70","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"11","section_id"=>"2","department_id"=>"2","room_number"=>"71","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"11","section_id"=>"3","department_id"=>"2","room_number"=>"72","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"1","department_id"=>"3","room_number"=>"73","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"2","department_id"=>"3","room_number"=>"74","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"3","department_id"=>"3","room_number"=>"75","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"1","department_id"=>"3","room_number"=>"76","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"2","department_id"=>"3","room_number"=>"77","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"3","department_id"=>"3","room_number"=>"78","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"1","department_id"=>"4","room_number"=>"79","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"2","department_id"=>"4","room_number"=>"80","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"3","department_id"=>"4","room_number"=>"81","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"1","department_id"=>"4","room_number"=>"82","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"2","department_id"=>"4","room_number"=>"83","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"3","department_id"=>"4","room_number"=>"84","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"1","department_id"=>"5","room_number"=>"85","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"2","department_id"=>"5","room_number"=>"86","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"3","department_id"=>"5","room_number"=>"87","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"1","department_id"=>"5","room_number"=>"88","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"2","department_id"=>"5","room_number"=>"89","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"3","department_id"=>"5","room_number"=>"90","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],

            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"1","department_id"=>"6","room_number"=>"91","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"2","department_id"=>"6","room_number"=>"92","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"1","certificate_id"=>"12","section_id"=>"3","department_id"=>"6","room_number"=>"93","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"1","department_id"=>"6","room_number"=>"94","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"2","department_id"=>"6","room_number"=>"95","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
            ["language_id"=>"2","certificate_id"=>"12","section_id"=>"3","department_id"=>"6","room_number"=>"96","number_of_students"=>0,"max_number_of_students"=>30,"school_year"=>2026],
        ]);

        SubjectDepartment::factory()->createMany([
            ["subject_id"=>1,"department_id"=>1],
            ["subject_id"=>1,"department_id"=>2],
            ["subject_id"=>1,"department_id"=>3],
            ["subject_id"=>1,"department_id"=>4],
            ["subject_id"=>1,"department_id"=>5],
            ["subject_id"=>1,"department_id"=>6],
            ["subject_id"=>1,"department_id"=>7],
            ["subject_id"=>2,"department_id"=>1],
            ["subject_id"=>2,"department_id"=>2],
            ["subject_id"=>2,"department_id"=>3],
            ["subject_id"=>2,"department_id"=>4],
            ["subject_id"=>2,"department_id"=>5],
            ["subject_id"=>2,"department_id"=>6],
            ["subject_id"=>2,"department_id"=>7],
            ["subject_id"=>3,"department_id"=>1],
            ["subject_id"=>3,"department_id"=>2],
            ["subject_id"=>3,"department_id"=>3],
            ["subject_id"=>3,"department_id"=>4],
            ["subject_id"=>3,"department_id"=>5],
            ["subject_id"=>3,"department_id"=>6],
            ["subject_id"=>3,"department_id"=>7],
            ["subject_id"=>4,"department_id"=>7],
            ["subject_id"=>5,"department_id"=>1],
            ["subject_id"=>5,"department_id"=>2],
            ["subject_id"=>5,"department_id"=>3],
            ["subject_id"=>5,"department_id"=>4],
            ["subject_id"=>5,"department_id"=>5],
            ["subject_id"=>5,"department_id"=>6],
            ["subject_id"=>5,"department_id"=>7],
            ["subject_id"=>6,"department_id"=>1],
            ["subject_id"=>6,"department_id"=>2],
            ["subject_id"=>6,"department_id"=>3],
            ["subject_id"=>6,"department_id"=>4],
            ["subject_id"=>6,"department_id"=>5],
            ["subject_id"=>6,"department_id"=>6],
            ["subject_id"=>6,"department_id"=>7],
            ["subject_id"=>7,"department_id"=>1],
            ["subject_id"=>7,"department_id"=>2],
            ["subject_id"=>7,"department_id"=>3],
            ["subject_id"=>7,"department_id"=>4],
            ["subject_id"=>7,"department_id"=>5],
            ["subject_id"=>7,"department_id"=>6],
            ["subject_id"=>7,"department_id"=>7],
            ["subject_id"=>8,"department_id"=>1],
            ["subject_id"=>8,"department_id"=>2],
            ["subject_id"=>8,"department_id"=>3],
            ["subject_id"=>8,"department_id"=>4],
            ["subject_id"=>8,"department_id"=>5],
            ["subject_id"=>8,"department_id"=>6],
            ["subject_id"=>8,"department_id"=>7],
            ["subject_id"=>9,"department_id"=>1],
            ["subject_id"=>9,"department_id"=>2],
            ["subject_id"=>9,"department_id"=>3],
            ["subject_id"=>9,"department_id"=>4],
            ["subject_id"=>9,"department_id"=>5],
            ["subject_id"=>9,"department_id"=>6],
            ["subject_id"=>9,"department_id"=>7],
            ["subject_id"=>10,"department_id"=>1],
            ["subject_id"=>10,"department_id"=>2],
            ["subject_id"=>10,"department_id"=>3],
            ["subject_id"=>10,"department_id"=>4],
            ["subject_id"=>10,"department_id"=>5],
            ["subject_id"=>10,"department_id"=>6],
            ["subject_id"=>10,"department_id"=>7],
            ["subject_id"=>11,"department_id"=>1],
            ["subject_id"=>11,"department_id"=>2],
            ["subject_id"=>11,"department_id"=>3],
            ["subject_id"=>11,"department_id"=>4],
            ["subject_id"=>11,"department_id"=>5],
            ["subject_id"=>11,"department_id"=>6],
            ["subject_id"=>11,"department_id"=>7],
            ["subject_id"=>12,"department_id"=>1],
            ["subject_id"=>12,"department_id"=>2],
            ["subject_id"=>12,"department_id"=>3],
            ["subject_id"=>12,"department_id"=>4],
            ["subject_id"=>12,"department_id"=>5],
            ["subject_id"=>12,"department_id"=>6],
            ["subject_id"=>13,"department_id"=>1],
            ["subject_id"=>13,"department_id"=>2],
            ["subject_id"=>13,"department_id"=>3],
            ["subject_id"=>13,"department_id"=>4],
            ["subject_id"=>13,"department_id"=>5],
            ["subject_id"=>13,"department_id"=>6],
            ["subject_id"=>13,"department_id"=>7],
            ["subject_id"=>14,"department_id"=>1],
            ["subject_id"=>14,"department_id"=>2],
            ["subject_id"=>14,"department_id"=>3],
            ["subject_id"=>14,"department_id"=>4],
            ["subject_id"=>14,"department_id"=>5],
            ["subject_id"=>14,"department_id"=>6],
            ["subject_id"=>14,"department_id"=>7],
            ["subject_id"=>15,"department_id"=>1],
            ["subject_id"=>15,"department_id"=>2],
            ["subject_id"=>15,"department_id"=>3],
            ["subject_id"=>15,"department_id"=>4],
            ["subject_id"=>15,"department_id"=>5],
            ["subject_id"=>15,"department_id"=>6],
            ["subject_id"=>15,"department_id"=>7],

        ]);
        
    }
}
