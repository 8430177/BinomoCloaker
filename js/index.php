<?php
//���� ���� ���������� ���������� � ������ ������������, ���������
//��������� ���: <script src="https://���.�����/js"></script>
//� ������ ����������� ������������� ��������, ����� ��������� �������
//����������� �������� ������������ �� ��� ����
    include 'obfuscator.php';
    include '../settings.php';
    if ($use_js_checks) {
        header('Content-Type: text/javascript');
        $jsCode= str_replace('{DOMAIN}', $_SERVER['SERVER_NAME'], file_get_contents(__DIR__.'/connect.js'));
        if ($js_obfuscate) {
            $hunter = new HunterObfuscator($jsCode);
            echo $hunter->Obfuscate();
        } else {
            echo $jsCode;
        }
    } else {
        include 'process.php';
    }
