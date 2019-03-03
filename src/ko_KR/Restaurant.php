<?php

namespace Lesstif\FakerProvider\ko_KR;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        '고등어조림',
        '과메기',
        '굴비',
        '꽁치조림',
        '매운탕',
        '물회',
        '북엇국',
        '아귀찜',
        '오징어볶음',
        '해물찜',
        '장조림',
        '제육볶음',
        '두루치기',
        '닭죽',
        '잣죽',
        '전복죽',
        '족발',
        '편육',
        '수육',
        '갈비탕',
        '감자탕',
        '닭도리탕',
        '설렁탕',
        '알탕',
        '육개장',
        '추어탕',
        '된장찌개',
        '김치찌개',
        '부대찌개',
        '순두부찌개',
        '냉면',
        '잔치국수',
        '비빔국수',
        '막국수',
        '칼국수',
    ];

    protected static $beverageNames = array(
        'Beer', 'Bud Light', 'Budweiser', 'Miller Lite',
        'Milk Shake', 'Tea', ' Sweet Tea', 'Coffee', 'Hot Tea',
        'Champagne', 'Wine', 'Limonade', 'Coca_cola', 'Diet-Coke',
        'Water', 'Sprite', 'Orange Juice', 'Iced Coffee'
    );

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }
}
