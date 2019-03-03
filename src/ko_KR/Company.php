<?php

namespace Lesstif\FakerProvider\ko_KR;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}}{{firstName}}',
        '{{companyPrefix}}{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
        '{{firstName}}{{companySuffix}}',
    );

    protected static $companyPrefix = array('(주)', '(주)', '(주)', '(유)');

    protected static $companySuffix = array(
        '식품', '식당', '레스토랑', '푸드',
    );

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    protected static $cramschoolNames = [
        '경희태권도',
        '으뜸수학',
        'MSC 논술',
        '과학하고 앉아있네',
        '용인대 태권도',
        '해동검도',
        '민병철어학원',
        'YBM',
        '윤선생영어',
        '이익훈어학원',
        '해커스어학원',
        '영단기',
        '파고다어학원',
        '해피잉글리시스쿨',
        '성공학원',
        '수학의 정석',
        '해법 수학',
        '오를수학',
        '잘할수학',
        '김재범 유도학원',
        '리틀블루밍스',
        '리틀블루밍스',
        '노다메 칸타빌레',
        '하모니 피아노',
        '피아노의 숲',
        '스케치 미술학원',
        '다빈치 미술학원',
        '그리는 세상 미술학원',
    ];

    protected static $beautyNames = [
        '머리하는 날',
        '홍헤어',
        '뽀까보까',
        '김헤어센스',
        '헤라 네일',
        '박준미장원',
        '김철미용실',
        '오늘네일',
        '예쁜 손톱',
        '김헤어',
        '발마사지',
    ];

    protected static $foodStoreNames = [
        '육전면사무소',
        '이태리 부대찌개',
        '최고 부대찌개',
        '승혜네떢볶이',
        '진짜루',
        '복성각',
        '거인통닭',
        '수원왕갈비',
        '양평해장국',
        '나물과 곰',
        '고창식당',
        '불닭발',
        '바르다 김선생',
        '김밥천국',
        '김밥나라',
        '불고기 대장',
        '족과의 동침',
        '대장 만두',
        '금천 족발',
        '부영 갈비탕',
        '최고집 칼국수',
        '동대문 닭한마리',
        '홍대 돈부리',
        '이찌 돈부리',
        '판교 우렁 된장',
        '낙지 먹고 맴맴',
        '힘찬 낙지',
        '힘센 낙지탕',
        '동동 국수집',
        '구포 국수',
        '만리포 회집',
        '고기 잡는 날',
        '생선 먹는 날',
        '일주일회',
        '싱싱해 싱싱어',
        '돼지 탐나라',
        '흑돈가',
        '흑도니',
        '숯불탁탁',
        '한우리 한정식',
        '금촌 백반',
        '미스터 순두부',
        '밀향',
        '소공동 뚝배기',
        '우래옥',
        '오키친',
        '오븐에 빠진 닭',
        '응닭하라 8900',
        '기절족풍',
    ];

    /**
     * A random Food Name.
     * @return string
     */
    public function cramschoolStoreName()
    {
        return static::randomElement(static::$cramschoolNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beautyStoreName()
    {
        return static::randomElement(static::$beautyNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function foodStoreName()
    {
        return static::randomElement(static::$foodStoreNames);
    }
}
