<?php echo $this->load->view('header');?>

                                                    <div class="sm-mod-site">
  <span class="banfirtxt">当前位置：</span>
<a href="{$this->createUrl('/xt/default/index')}">首页</a>
<span class="icon-arrl">&gt;&gt;</span>
<a href="http://www.jinfuzi.com/xintuo/company">信托课堂</a>
</div>
<div class="xtmain">

    <div class="col01box fl">

        <div class="alljsbox">
            <h2>信托课堂</h2>

            <div class="jzallmap">
                <ul class="">
                    <?php foreach($result as $val){ ?>
                    <li style="font-size:14px;">
                        <a href="/lesson/lessoninfo?id=<?php echo $val['id']; ?>">
                            <?php echo $val['title']; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

        </div>

    </div><!-- col01box end -->
    <div class="colsidbox fr ">
    <div class="banfw">
    <img src="/static/cmpt/root/images/xt/fuwuimg.png" alt=""/>
</div>  

    <div class="xtnolbox">
    <div class="xttitbox">
        <h2 class="sidtits kuaitit">快速搜索</h2>
        <div class="titsublink">
            <a href="http://www.jinfuzi.com/xintuo/xtlist" target="_blank">&gt;&gt;更多</a>
        </div>
    </div>
    <!-- xttitbox end -->
    <div class="kuaisoucon">

        <dl class="kuaisoulist">
                        <dt>
                期限
            </dt>
            <dd>
                <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-1-0-0-1">1年内</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-2-0-0-1">1-2年</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-3-0-0-1">2-3年</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-4-0-0-1">3年以上</a>         </dd>
                        <dt>
                收益
            </dt>
            <dd>
                <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-1-0-0-0-1">小于6%</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-2-0-0-0-1">6-8%</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-3-0-0-0-1">8-10%</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-4-0-0-0-1">大于10%</a>          </dd>
                        <dt>
                门槛
            </dt>
            <dd>
                <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-1-0-0-0-0-1">小于50万</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-2-0-0-0-0-1">50-100万</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-3-0-0-0-0-1">100-300万</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-4-0-0-0-0-1">大于300万</a>          </dd>
                    </dl>
    </div>
</div>
    <div class="xtnolbox">
    <div class="xttitbox xtnewtit">
        <h2 class="sidtits">一周发行收益排名</h2>
        <div class="titsublink"><a href="#" class="" title=""></a></div>
    </div>
    <div class="xtpaimintb">
        <table class="">
            <thead>
                <tr>
                    <td width="34">&nbsp;</td>
                    <td width="155">产品名称</td>
                    <td width="61"> 预期收益</td>
                </tr>
            </thead>
            <tbody>
                                <tr>
                    <td class="cen"><span class="tbiconnum numred">1</span></td>
                    <td><p><a target="_blank" title="普仁7号财富管理基金（I级） " href="http://www.jinfuzi.com/product/0113204">普仁银行</a></p></td>
                    <td class="cen"><span class="c_sy">11.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum numred">2</span></td>
                    <td><p><a target="_blank" title="华澳信托·郎溪商会大厦项目（二期） " href="http://www.jinfuzi.com/product/0113183">郎溪商会大厦（二期） </a></p></td>
                    <td class="cen"><span class="c_sy">10.50%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum numred">3</span></td>
                    <td><p><a target="_blank" title="中融信托-大华融享集合资金信托计划1期" href="http://www.jinfuzi.com/product/0113173">大华融享1期</a></p></td>
                    <td class="cen"><span class="c_sy">10.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">4</span></td>
                    <td><p><a target="_blank" title="四川信托-睿宝42号股权收益权投资集合资金信托计划" href="http://www.jinfuzi.com/product/0113193">睿宝42号</a></p></td>
                    <td class="cen"><span class="c_sy">10.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">5</span></td>
                    <td><p><a target="_blank" title="中融信托-融石新源燕府项目集合信托计划" href="http://www.jinfuzi.com/product/0113206">融石新源燕府</a></p></td>
                    <td class="cen"><span class="c_sy">10.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">6</span></td>
                    <td><p><a target="_blank" title="国民信托-贵州思州润峰股权收益权投资集合资金信托计划" href="http://www.jinfuzi.com/product/0113207">贵州思州润峰</a></p></td>
                    <td class="cen"><span class="c_sy">10.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">7</span></td>
                    <td><p><a target="_blank" title="四川信托-绵阳兴源环亚股权投资集合资金信托计划" href="http://www.jinfuzi.com/product/0113210">绵阳兴源环亚</a></p></td>
                    <td class="cen"><span class="c_sy">10.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">8</span></td>
                    <td><p><a target="_blank" title="方正东亚-辽滨沿海集合资金信托计划" href="http://www.jinfuzi.com/product/0113000">辽滨沿海集合资金</a></p></td>
                    <td class="cen"><span class="c_sy">10.00%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">9</span></td>
                    <td><p><a target="_blank" title="华澳信托-上海三盛宏业融资项目集合信托计划" href="http://www.jinfuzi.com/product/0113208">上海三盛宏业</a></p></td>
                    <td class="cen"><span class="c_sy">9.80%</span></td>
                </tr>
                                <tr>
                    <td class="cen"><span class="tbiconnum">10</span></td>
                    <td><p><a target="_blank" title="中融信托-中城建1号信托贷款集合资金信托计划" href="http://www.jinfuzi.com/product/0113177">中城建1号</a></p></td>
                    <td class="cen"><span class="c_sy">9.50%</span></td>
                </tr>
                            </tbody>
        </table>
    </div>
</div>    <div class="clear"></div>
    </div><!-- colsidbox end -->
    <div class="clear"></div>

    <div class="hotxtbox">
    <div class="hotxttit"><h2>热门信托机构</h2></div>
    <div class="hotxtlist">
        <ul class="">
            <li><a href="http://www.jinfuzi.com/xintuo/c-6"><img width="50" height="50" src="/assets/a92e9011/comlogo/6.jpg" alt="中融国际信托有限公司" />中融信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-7"><img width="50" height="50" src="/assets/a92e9011/comlogo/7.jpg" alt="中铁信托有限责任公司" />中铁信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-8"><img width="50" height="50" src="/assets/a92e9011/comlogo/8.jpg" alt="上海爱建信托有限责任公司" />爱建信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-9"><img width="50" height="50" src="/assets/a92e9011/comlogo/9.jpg" alt="中原信托有限公司" />中原信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-10"><img width="50" height="50" src="/assets/a92e9011/comlogo/10.jpg" alt="渤海国际信托有限公司" />渤海信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-11"><img width="50" height="50" src="/assets/a92e9011/comlogo/11.jpg" alt="安信信托投资股份有限公司" />安信信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-12"><img width="50" height="50" src="/assets/a92e9011/comlogo/12.jpg" alt="杭州工商信托股份有限公司" />杭州工商信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-13"><img width="50" height="50" src="/assets/a92e9011/comlogo/13.jpg" alt="北方国际信托股份有限公司" />北方信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-14"><img width="50" height="50" src="/assets/a92e9011/comlogo/14.jpg" alt="中国金谷国际信托有限责任公司" />金谷信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-15"><img width="50" height="50" src="/assets/a92e9011/comlogo/15.jpg" alt="苏州信托有限公司" />苏州信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-16"><img width="50" height="50" src="/assets/a92e9011/comlogo/16.jpg" alt="天津信托有限责任公司" />天津信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-17"><img width="50" height="50" src="/assets/a92e9011/comlogo/17.jpg" alt="吉林省信托有限责任公司" />吉林信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-18"><img width="50" height="50" src="/assets/a92e9011/comlogo/18.jpg" alt="江苏省国际信托有限责任公司" />江苏信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-19"><img width="50" height="50" src="/assets/a92e9011/comlogo/19.jpg" alt="建信信托有限责任公司" />建信信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-20"><img width="50" height="50" src="/assets/a92e9011/comlogo/20.jpg" alt="五矿国际信托有限公司" />五矿国际信托</a></li><li><a href="http://www.jinfuzi.com/xintuo/c-21"><img width="50" height="50" src="/assets/a92e9011/comlogo/21.jpg" alt="国民信托有限公司" />国民信托</a></li>        </ul>
        <div class="clear"></div>
    </div>
</div></div><!-- xtmain end --> <!--<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10018445&style=1'></script>-->
<script type="text/javascript">
    document.write("<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10018445&style=1'><\/script>");
</script>
<div style='display:none;'><a href='http://www.53kf.com'>在线客服系统</a></div>
<?php echo $this->load->view('footer'); ?>