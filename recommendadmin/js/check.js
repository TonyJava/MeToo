$(document).ready(function(){
            //����û���
            $('input[name="username"]').blur(function(){
                //1������������Ϣ�ڵ�
                var $error3 = $('<br/><span class="red">�û�������Ϊ��</span>');
                //2�����ӽڵ㵽DOM����
                if($(this).val() == ''){
                    //��ɾ��ԭ�е���ʾ��Ϣ
                    $span = $('td:eq(1) span').remove();
                    //�����ӽڵ�
                    $('td:eq(1)').append($error3);
                }else{
                    $span = $('td:eq(1) span').remove();
                }
            });

            //�������
            $('input[name="password"]').blur(function(){
                var tmp=$(this).get(0).value;
                if(tmp.length==0){
                    //$span = $('tr:eq(1) span').remove();
                    $(this).next().remove();
                    var error=$("<br/><span>���벻��Ϊ��</span>");
                    var pa=$(this).parent();
                    pa.append(error);
                }else{
                    $(this).next().remove();
                }
            })

            //���ȷ������
            $('input[name="repassword"]').blur(function(){
                var pwd=$('input[name="password"]').get(0).value;
                var repwd=$('input[name="repassword"]').get(0).value;
                if(pwd!=repwd){
                    $error2="<br/><span>������������벻һ��</span>";
                    $(this).parent().append($error2);
                }else{
                    $(this).next().remove();
                }
            })
        }); 