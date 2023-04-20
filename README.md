此项目可以用来测试爬虫能力

# 使用
* 第一步：启动web服务

   ```
   php -S 0.0.0.0:8080
   ```

* 第二步：使用爬虫测试

   比如测试katana能够满足哪些场景，可以使用如下命令

   ```
   docker run -ti --privileged --rm projectdiscovery/katana:v1.0.1 -v -aff -u 192.168.2.105:8080/x_dialog.html -system-chrome -headless
   ```
  
# 目录
1. common 测试爬虫框架能力
    * 重复爬取
    * 爬虫深度
2. pages 测试爬虫能力
    * dom事件触发
    * 内敛on、javascript触发
    * 表单处理
    * 30x跳转、前端跳转处理
    * 弹窗处理

# 编写注意
1. 页面之间的关联性，应该是下一个文件页面能够指向前一个页面
