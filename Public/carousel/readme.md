ʹ�÷���
��jQuery��תľ������Ҫ����jQuery��jquery.carousel.js�ļ���

<script src="js/jquery.min.js"></script>
<script src="js/jquery.carousel.js"></script>
HTML�ṹ
��jQuery��תľ����ʹ��һ��<div>����Ϊ����Ԫ�أ�����������һ�������б����ڷ���ͼƬ���Լ�������Ϊǰ�󵼺���ť��<div>Ԫ�ء�

<div class="caroursel rotator-demo">
  <ul class="rotator-list">
    <li class="rotator-item"><img src="image/1.jpg"></li>
    <li class="rotator-item"><img src="image/2.jpg"></li>
    <li class="rotator-item"><img src="image/3.jpg"></li>
  </ul>
  <div class="rotator-btn rotator-prev-btn"></div>
  <div class="rotator-btn rotator-next-btn"></div>
</div>
ͼƬ��������ҪΪ�����ţ�������ʾ����һЩ�쳣�����Ǹò����һ��Сbug��

CSS��ʽ
����ҪΪ����תľ����Ч��������һЩ��Ҫ��CSS��ʽ��

.rotator-main {
  position: relative;
  width: 900px;
  height: 400px
}
 
.rotator-main a, .rotator-main img { display: block; }
 
.rotator-main .rotator-list {
  width: 900px;
  height: 400px
}
 
.rotator-main .rotator-list .rotator-item {
  position: absolute;
  left: 0px;
  top: 0px
}
 
.rotator-main .rotator-btn {
  position: absolute;
  height: 100%;
  width: 100px;
  top: 0px;
  z-index: 10;
  opacity: 0;
}
 
.rotator-main .rotator-prev-btn {
  left: 0px;
  background: url("../image/btn_l.png") no-repeat center center;
  background-color: red
}
 
.rotator-main .rotator-next-btn {
  right: 0px;
  background: url("../image/btn_r.png") no-repeat center center;
  background-color: red
}
��ʼ�����
��ҳ��DOMԪ�ؼ������֮�󣬿���ͨ������ķ�������ʼ������תľ������

Caroursel.init($('.caroursel'))                

�������Ҫ�Զ���һЩ�����������ڶ���<div>Ԫ��������data-setting���ԡ�

<div class="caroursel rotator-main"
     data-setting = '{
      "width":1000,         //��תľ��Ŀ��
      "height":270,         //��תľ��ĸ߶�
      "posterWidth":640,    //��ǰ��ʾ��ͼƬ�Ŀ��
      "posterHeight":270,   //��ǰ��ʾ��ͼƬ�ĸ߶�
      "scale":0.8,          //����ֵ
      "algin":"middle",     //���뷽ʽ
      "speed":"1000",       //�����ٶ�
      "isAutoplay":"true",  //�Զ�����
      "dealy":"1000"        //�ӳ�ʱ��
}'>
