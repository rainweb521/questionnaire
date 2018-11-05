# 在线答题-问卷调查小系统

## 前段时间公司要开一个安全会议，要现场在线答题，网上的问卷调查网站很多，但涉及到公司内部信息，并且题型还需要自定义，所以打算自己做一个，要求就是直接输入姓名，手机号，公司就能进行答题，题目由题库中随机出10道有单选和多选，技术上比较好实现，有问题的可以看一下代码，而且我对输入的姓名，手机号都严格限制不能随便输入。答完题后会显示答对题数，并将所有题目正确和错误的答案显示出来。

## 之前觉得比较简单，用户状态直接开个session去存，懒得做请求转发，但后来系统冲进来几百人答题，搞的服务器有些崩，而且出现大量空数据，很多用户答题之后没有保留答题记录，之前小测的时候没有问题，人多出现未知bug，后来我马上使用请求转发，将获取的data转存出去，后来在没有出现问题，所以可以骄傲的说，这个小系统能承受几百用户的冲击。

[GitHub地址：https://github.com/rainweb521/questionnaire](https://github.com/rainweb521/questionnaire)

[gitee地址：https://gitee.com/rainweb/questionnaire](https://gitee.com/rainweb/questionnaire)

![](https://raw.githubusercontent.com/rainweb521/questionnaire/master/public/reade/wen1.png)
![](https://raw.githubusercontent.com/rainweb521/questionnaire/master/public/reade/wen2.png)
![](https://raw.githubusercontent.com/rainweb521/questionnaire/master/public/reade/wen3.png)
![](https://raw.githubusercontent.com/rainweb521/questionnaire/master/public/reade/wen4.png)