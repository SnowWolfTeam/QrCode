#二维码生成

#### 说明
    此包仅仅在开发者aferranini的二维码生成工具的基础上封装了一个简单函数
###### 接口
* 1 . createQrPic($text, $path = '', $level = Constants::QR_ECLEVEL_L, $size = 3, $margin = 4) 创建二维码
```
    1.$text = 二维码内容
    2.$path = 保存路径，如果为空，表示返回图片数据，如果输入的是路径就直接保存为路径图片
    3.$level = 0,1,2,3 具体查看核心文件
    4.$size = 图片大小,0~无限
    5.$margin = 图片与边的空白间隔
```
 