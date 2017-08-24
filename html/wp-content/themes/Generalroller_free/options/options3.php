<div class="xiaot"> 
                	
              
                </div>

 <div class="up">
                    <b class="bt">首页title替换（pc）</b>
                    <textarea name="title" cols="86" rows="3" id="title" readonly="true"></textarea>   
                    <p>默认调用的是设置--常规中的站点标题+副标题</p>
                </div> 

   <div class="up">
                    <b class="bt">网站关键字填写（pc）</b>
                    <textarea name="keywords" cols="86" rows="3" id="keywords"><?php echo get_option('mytheme_keywords'); ?></textarea>   
                    <p>请填写网站的关键字，使用“ , ”分开，一个网站的关键字一般不超过100个字符。</p>
                </div>   
                
                 <div class="up">
                    <b class="bt">网站描述填写（中文）</b>
                    <textarea name="description" cols="86" rows="3" id="description"><?php echo get_option('mytheme_description'); ?></textarea>    
                    <p>请填写网站的描述，使用,分开，一个网站的描述一般不超过200个字符。</p>
                </div>   
                
                
                
 <div class="up">
                    <b class="bt">首页title替换（移动版）</b>
                    <textarea name="title_p" cols="86" rows="3" id="title_p"readonly="true"></textarea>   
                    <p>默认调用的是设置--常规中的站点标题+副标题</p>
                </div> 

   <div class="up">
                    <b class="bt">网站关键字填写（移动版）</b>
                    <textarea name="keywords_p" cols="86" rows="3" id="keywords_p"readonly="true"></textarea>   
                    <p>请填写网站的关键字，使用“ , ”分开，一个网站的关键字一般不超过100个字符。</p>
                </div>   
                
                 <div class="up">
                    <b class="bt">网站描述填写（移动版）</b>
                    <textarea name="description_p" cols="86" rows="3" id="description_p"readonly="true"></textarea>    
                    <p>请填写网站的描述，使用,分开，一个网站的描述一般不超过200个字符。</p>
                </div>   
                   

                      <div class="up">    
                    <b class="bt">网站统计代码添加</b>
                    <textarea name="analytics" cols="86" rows="4" id="analytics"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>    
                 
                 <a href="http://www.themepark.com.cn/wordpresswzseohj.html">网站的seo应该如何去做？ 我们给你一些文章作为参考</a>
                   <p class="tishiwenzi">当前使用的主题为免费版，付费版可以解锁主题的seo功能（包括独立的移动版seo设置）<a target="_blank" href="http://www.themepark.com.cn/tygzwordpressqyzt.html"> 查看付费版详情</a></p>
  </div>  
  
            <div class="xiaot">

        <b class="bt">ICP备案</b><br />
      <label  for="two_code_title">icp备案号，没有可以不填：</label>        
       <input type="text" size="60"  name="icp_b" id="icp_b" value="<?php echo $icp_b;?>"/>  <br />

          <b class="bt">公安备案号</b><br />
      <label  for="two_code_title">公安备案号，没有可以不填：</label>        
       <input type="text" size="60"  name="gongan_b" id="gongan_b" value="<?php echo get_option("mytheme_gongan");?>"/>  <br />
       
         <b class="bt">公安备案号链接</b><br />
      <label  for="two_code_title">公安备案号链接，没有可以不填：</label>        
       <input type="text" size="60"  name="gongan_b_link" id="gongan_b_link" value="<?php echo get_option("mytheme_gongan_b_link");?>"/>  <br />
         
     
        </div>
                  
</div>
 </div>
   