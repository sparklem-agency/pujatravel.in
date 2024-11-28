<?php

namespace App\Controllers;

class CourseController
{

    static function diploma_courses(): array
    {

        return $courses = [
            [
                'name' => 'diploma in hotel management',
                'image' => 'diploma-1.webp',
            ],
            [
                'name' => 'diploma in hospital and tourism studies',
                'image' => 'diploma-2.webp',
            ],
            [
                'name' => 'diploma in front office management',
                'image' => 'diploma-3.webp',
            ],
            [
                'name' => 'diploma in food and beverage',
                'image' => 'diploma-4.webp',
            ],
            [
                'name' => 'aviation and hospitality management diploma',
                'image' => 'diploma-5.webp',
            ],
            [
                'name' => 'diploma in accommodation management',
                'image' => 'diploma-6.webp',
            ],
            [
                'name' => 'diploma in clinary arts & bakery',
                'image' => 'diploma-7.webp',
            ],
        ];

        return $courses;
    }

    static function advance_diploma_courses(): array
    {

        $advance_courses = [
            [
                'name' => 'Advance diploma in hospitality and tourism management',
                'image' => 'advance-diploma-1.webp',
            ],
            [
                'name' => 'Advance diploma in hotel management',
                'image' => 'advance-diploma-2.webp',
            ],
            [
                'name' => 'Advance diploma in culinary arts and bakery',
                'image' => 'advance-diploma-3.webp',
            ],
        ];

        return $advance_courses;
    }
}
