<?php
public function getJobNameAttribute() {
    $jobs = [
    '0' => '未選択',
    '1' => '学生',
    '2' => 'フリーター',
    '3' => '会社員',
    '4' => '主婦・主夫',
    '5' => 'その他'
    ];
    return array_get($jobs, $this->occupation);
}
?>