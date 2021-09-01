<?php

/* Template Name: 美肌治療
 */

?>
<?php if( !post_password_required( $post->ID ) ) :  ?>
<?php get_header()?>

<main>
  <div class="medikaru">
    <div class="header">
      <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo_re.png" alt="fumi beauty clinic umeda"></div>
      <h1 class="tc">当院の美肌治療</h1>
    </div><!-- header END -->
    <section class="feature pt0">
      <div class="inner">
        <h2 class="tc">当院の美肌治療の特徴</h2>
        <p class="tc txt_lead pb0">
          美しさには美肌が不可欠です。<br class="">当院では、小じわ・ニキビ・<br class="sp">しみ・毛穴等のトラブルケア、<br class="">また日々のアンチエイジングケア・<br class="sp">美肌ケアの<br class="pc">お手伝いができるよう<br class="sp">さまざまな施術をご用意しております。<br class="">ぜひお気軽にご相談下さい。</p>
      </div><!-- inner END -->
    </section><!-- feature END -->
    <section class="menu bg_gray">
      <div class="inner">
        <h2 class="tc">美肌治療メニュー</h2>
        <div class="menu_list flex fw jc-cent tc">
			<a href="#area1"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1_icon.png" alt="">バイオ<br class="">リモデリング</a>
			<a href="#area2"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2_icon.png" alt="">ダーマペン４</a>
			<a href="#area3"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area3_icon.png" alt="">リニアハイフ</a>
			<a href="#area4"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area4_icon.png" alt="">美容点滴</a>
			<a href="#area5"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area5_icon.png" alt="">クイーンリフト</a>
			<a href="#area6"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6_icon.png" alt="">各種ピーリング</a>
			<a href="#area7"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7_icon.png" alt="">エンビロン<br class="">トリートメント</a>
        </div>
      </div><!-- inner END -->
    </section><!-- menu END -->
    <section id="area1">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1_icon.png" alt=""></span>バイオリモデリング</h2>
            <p class="txt_lead tc">
				肌の再構築を促し肌自体の若返りをする治療です。<br class="">ナチュラルに美しくアンチエイジングを目指す方におすすめです。</p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>自然なアンチエイジングがしたい</li>
                <li class="txt_small">目元の小じわやちりめんジワ、口横の小じわ<br class="">額のシワ・ちりめんじわ</li>
                <li>肌の弾力をアップさせたい</li>
                <li>艶のある滑らかな肌にしたい</li>
                <li>毛穴の改善</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
                <li>肌がくすんで見える、透明感を出したい</li>
                <li>輪郭をすっきりさせたい</li>
                <li>首やデコルテ、手のシワ</li>
                <li>ボトックスに抵抗がある</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                真皮には typeⅠコラーゲン、typeⅣコラーゲン、エラスチン、ヒアルロン酸などが多く、また細胞外マトリックスが主体となっています。細胞外マトリックスとは非細胞性の構成成分のことで、細胞の伝達を伝えたり、細胞を守る土台の役割があります。<br class="">バイオリモデリングは細胞外マトリクスの再構築を促し、線維芽細胞・角化細胞・脂肪細胞を活性化し、それを維持します。またコラーゲンやエラスチンの発現を増やすことでハリが出ます。<br class="">表情を変えることなく限りなく自然な仕上がりで、ハリのある美肌に導きます。
              </p>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1_img.jpg" alt=""></div>
            </div>
          </div>
          <div class="flow bg_gray_box inner mb30">
            <h3 class="tc">バイオリモデリング 施術の流れ</h3>
            <ol class="flow_step">
              <li><span class="gosic">診察・カウンセリング</span></li>
              <li><span class="gosic">クレンジング・洗顔</span></li>
              <li><span class="gosic">施術前撮影</span></li>
              <li><span class="gosic">麻酔クリーム</span></li>
              <li><span class="gosic">施術</span></li>
              <li><span class="gosic">施術後撮影</span></li>
              <li><span class="gosic">終了</span></li>
            </ol>
          </div><!-- flow END -->
          <div class="btn_box inner mt50">
            <a href="https://fumibeauty.jp/faq_kind/sune/" class="btn_case gosic mb30">バイオリモデリング <br class="sp">症例写真はこちら</a>
          </div><!-- btn_box END -->
          <div class="btn_ancor inner mb30">
            <a href="#area1-1"><span class="">SUNEKOS<br class="sp">(スネコス)</span></a><a href="#area1-2"><span class="">プロファイロ</span></a><a href="#area1-3"><span class="">ヌクレオフィル</span></a>
          </div><!-- btn_ancor END -->
          <div id="area1-1" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">SUNEKOS(スネコス)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                SUNEKOS(スネコス)は、 自らの肌再生を促す治療です。<br class="">当院ではSUNEKOS(スネコス)1200・200をご用意しております。
              </p>
              <div class="sp mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-1_img_01_sp.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">小じわ</span></li>
                <li><span class="">ハリ・艶美肌</span></li>
                <li><span class="">目元・口元<br class="">のケア</span></li>
                <li><span class="">たるみ毛穴</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    SUNEKOS(スネコス)は、イタリアで生まれた注射剤です。<br class="">主な成分は非架橋結合ヒアルロン酸と６種のアミノ酸で特殊な比率で配合されています（国際特許取得）。この特殊な配合により、コラーゲンとエラスチンを同時に促進するアンチエイジングのための注射です。また、シンプルな組成の製剤で血管閉塞やアレルギーのリスクが非常に少ない安全性の高い製品です。
                  </p>
                  <ul class="check_list">
                    <li>真皮の細胞外マトリックス(ECM)にアプローチし、自らの肌再生を促し自然な若返り効果が期待できます。</li>
                    <li>目元口元などの小ジワに効果的で、ハリのある艶肌を目指すことが可能です。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-1_img_01_pc.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="sp_col1 flex">
                <div class="col_3-1 mb30">
                  <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-1_img_02.jpg" alt="BEFORE / AFTER 2MONTH"></div>
                </div>
                <div class="col_3-2 mb30">
                  <div class="box_red gosic">
                    <p>
						特に改善したい症状がある場合は、1週間から10日に一度のペースで4回程度の施術がおすすめです。<br class="">また初回等で1200と200を併用していただくことでより効果が高まります。<br class="">肌艶や透明感、美肌目的の場合は月に1回程度のペースで数回、または一回のみの治療も可能です。
                    </p>
                  </div><!-- box-red END -->
                </div><!-- inner END -->
              </div><!-- flex END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>SUNEKOS(スネコス)200  1回</td>
                      <td>¥55,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>SUNEKOS(スネコス)200  1回 <br class="sp">※2回目以降1ヶ月以内の場合</td>
                      <td><br class="sp">¥49,500 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>SUNEKOS(スネコス)1200 1本</td>
                      <td>¥110,000 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area1-1 END -->
          <div id="area1-2" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">プロファイロ</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                プロファイロは、自らの肌再生を促す治療です。<br class="">お顔全体のナチュラルなアンチエイジングをかなえます。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-2_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">自然な若返り</span></li>
				<li><span class="">リフトアップ</span></li>
                <li><span class="">ふっくら<br class="">
                  したハリ肌</span></li>
                <li><span class="">弾力UP<br class="">小じわ</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    プロファイロはイタリアのIBSA社の製品であり、NAHYCO™という特許技術を用いて作成された高分子量と低分子量のヒアルロン酸混合製剤です。科学的な架橋剤を一切使用せず、安定化ハイブリット技術という熱安定化工程(NAHYCO™）によって生産されているためアレルギーのリスクが低く安全性の高い製剤です。<br class="">基本的には特殊な手技であるバイオエステティックポイント注入法(顔の左右片側に5か所・首の場合は全体で10か所)で施術を行います。
                  </p>
                  <ul class="check_list">
                    <li>高分子量と低分子量のヒアルロン酸が注入後全体に均一に行きわたり細胞外マトリックス(ECM)の再構築を促します。</li>
                    <li>線維芽細胞・ケラチノサイト・脂肪細胞にも浸潤し活性化することでふっくらとハリのある肌に導きます。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-2_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="sp_col1 flex">
                <div class="col_3-2 mb30">
                  <div class="box_red gosic">
                    <p>
                      肌の老化が感じられるようになったら（35歳くらいから）半年に１度の治療を繰り返し行います。<br class="">すでにシワが刻まれている場合はまず30日毎に２回の治療を行います。<br class="">その後2カ月から8カ月後に再度1回の治療を行います。これをご希望のタイミングで繰り返し行います。
                    </p>
                  </div><!-- box-red END -->
                </div><!-- inner END -->
              </div><!-- flex END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>プロファイロ　1回</td>
                      <td>¥198,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>プロファイロ 2回セット</td>
                      <td>¥330,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>プロファイロ 3回目以降</td>
                      <td>¥165,000 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area1-2 END -->
          <div id="area1-3">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">ヌクレオフィル</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                ヌクレオフィルは、抗酸化作用を高め、肌の保水力・ハリ・キメ・透明感を<br class="pc">UPし輝く美肌に導きます。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-3_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">小じわ</span></li>
                <li><span class="">ハリ・弾力</span></li>
                <li><span class="">透明感UP</span></li>
                <li><span class="">凹凸の改善</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    ヌクレオフィルはイタリアで作られた製品です。”ポリヌクレオチド”というサーモンのDNAより抽出された成分が業界最高濃度の2.5％が配合されたスーパーサーモン注射です。ポリヌクレオチドは、皮膚の自己再生に必要な細胞外マトリックスや様々な成長因子の生産増加を活性化させる効果がある美肌再生治療です。<br class="">
                    DNAそのものや細胞を使うわけではなく、あくまでも「核酸」という一成分が主成分となります。皮膚に高い適合性を持つよう処理されており、安全性の高い製剤です。
                  </p>
                  <ul class="check_list">
                    <li>皮膚の組織再生に必要な細胞外マトリックス(ECM)や様々な成長因子の成長や増加を促しアンチエイジングを行います。</li>
                    <li>線維芽細胞を活性、また肌の保水効果を高めハリと弾力のある肌に導きます。</li>
                    <li>抗酸化作用が高く肌のくすみを取り除き透明感がUPします。</li>
                    <li>瘢痕等硬くなった組織を柔らかくし、凹凸を滑らかにします。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area1-3_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="sp_col1 flex">
                <div class="col_3-2 mb30">
                  <div class="box_red gosic">
                    <p>
                      15日～30日に1回のペースで4回程度の施術がおすすめです。<br class="">その後お肌の状態やご希望に合わせて半年～1年に1度のペースで繰り返し行います。
                    </p>
                  </div><!-- box-red END -->
                </div><!-- inner END -->
              </div><!-- flex END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>ヌクレオフィル 0.5㏄</td>
                      <td>¥55,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>ヌクレオフィル  1本(1.5cc)</td>
                      <td>¥132,000 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area1-3 END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area1 END -->
    <section id="area2">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2_icon.png" alt=""></span>ダーマペン4</h2>
            <p class="txt_lead tc">
              微細な針で皮膚表面に微小な穴を開けることで皮膚の創傷治癒力を利用し、<br class="">コラーゲン増生を促し、若々しい滑らかな肌に導く治療法です。<br class="">また美容成分を併用することで、薬剤が効率的に浸透し効果をもたらします。
            </p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>肌全体を若返らせたい</li>
                <li>肌全体のハリや艶、弾力をUPさせたい</li>
                <li>ニキビ跡・クレーターが気になる</li>
                <li>肌の弾力をアップさせたい</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
				<li>毛穴の開きが気になる</li>
                <li>小じわやちりめんじわが気になる</li>
                <li>つるっとした滑らかな肌になりたい</li>
                <li>美肌になりたい</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                ダーマペンとは、医療用ステンレス製の非常に極細な針を用いて、皮膚に微細な針穴形成する米国FDA認可の医療機器です。ペン型の特殊なニードルを皮膚に垂直にあて、高速振動によって、無数の微細な穴を開けることにより、極小な傷ができます。肌に小さな穴があくと肌自身の傷を治す力(自然治癒力)が働き、肌を元の状態に修復しようとします。その過程で表皮のターンオーバーを促進、また真皮ではコラーゲンやエラスチンなどが新たに作り出されます。<br class="">ペン状なので目元や口元や鼻等の細かい部分にもアプローチできるのもメリットです。<br class="">ダーマペンにより形成された微細な穴は数時間で閉鎖するので、傷跡が残ることはありません。</p>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2_img.jpg" alt=""></div>
            </div>
          </div>
          <div class="flow bg_gray_box inner mb30">
            <h3 class="tc">ダーマペン4 施術の流れ</h3>
            <ol class="flow_step">
              <li><span class="gosic">診察・カウンセリング</span></li>
              <li><span class="gosic">クレンジング・洗顔</span></li>
              <li><span class="gosic">施術前撮影</span></li>
              <li><span class="gosic">麻酔クリーム(約30分)</span></li>
              <li><span class="gosic">ダーマペン施術・(美容液やピーリング剤塗布)</span></li>
              <li><span class="gosic">冷却・鎮静</span></li>
              <li><span class="gosic">おしあげ</span></li>
              <li><span class="gosic">終了</span></li>
            </ol>
          </div><!-- flow END -->
          <div class="btn_box inner mt50">
            <a href="https://fumibeauty.jp/faq_kind/%e3%83%80%e3%83%bc%e3%83%9e%e3%83%9a%e3%83%b3%ef%bc%94/" class="btn_case gosic mb30">ダーマペン4 症例写真はこちら</a>
          </div><!-- btn_box END -->
          <div class="btn_ancor inner mb30">
            <a href="#area2-1"><span class="">ダーマペン4</span></a><a href="#area2-2"><span class="">ヴェルヴェット<br class="sp">スキン</span></a><a href="#area2-3"><span class="">ヴァンパイア<br class="sp">フェイシャル</span></a><a href="#area2-4"><span class="">その他の<br class="sp">使用薬剤</span></a>
          </div><!-- btn_ancor END -->
          <div id="area2-1" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">ダーマペン4</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                ダーマペン4は、肌自身の傷を治す力が働くことで、ターンオーバーが<br class="pc">
                促進され美肌をつくります。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2-1_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">美肌</span></li>
                <li><span class="">毛穴の改善</span></li>
                <li><span class="">シワの改善</span></li>
                <li><span class="">肌のハリ</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    ダーマペン4は0.2mmと3.0mmのニードルが追加となり、従来よりも幅広い穿刺深度を選択できるようになりました。中でも3.0㎜のニードルによる穿刺深度は、従来のダーマペンと比較すると最も深く、厚みのある「線維性組織」でも有効的な治療効果が期待できます。また穿刺速度も世界最速(1秒間に約120回の振動で約1920個の微細な穴)の為短時間の施術が可能に。
                  </p>
                  <ul class="check_list">
                    <li>お一人おひとりのお肌状態と改善したいお悩みに応じて穿刺深度や穿刺速度の中から最適な方法で調整を行います。</li>
                    <li>ダーマペンだけでも効果を感じることができますが、そのほかの施術と組み合わせることで相乗効果も得られます。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2-1_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>ダーマペン4 1部位</td>
                      <td>¥16,500 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>ダーマペン4 全顔</td>
                      <td>¥33,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>ダーマペン4 全顔＋首</td>
                      <td>¥49,500 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area2-1 END -->
          <div id="area2-2" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">ヴェルヴェットスキン</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                ヴェルヴェットスキン<br class="">（ダーマペン4×マッサージピール）
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2-2_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">美肌</span></li>
                <li><span class="">肌のハリ<br class="">透明感</span></li>
                <li><span class="">クレーター<br class="">傷跡の改善</span></li>
                <li><span class="">しわの改善</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    マッサージピールとダーマペン4を組み合わせた美肌治療です。マッサージピールに含まれる有効成分、TCA（トリクロロ酢酸）・過酸化水素水・コウジ酸をダーマペンによって、真皮層へとしっかり浸透させます。
                  </p>
                  <ul class="check_list mb10">
                    <li>施術後の肌をふかふかで滑らかなヴェルヴェットの様な質感に導くのがこのヴェルヴェットスキンの特徴です。</li>
                    <li>お肌にハリや弾力が欲しい方、若々しいお肌を取り戻したい方におすすめです。</li>
                  </ul>
                  <div class="tc gosic">
                    <a href="#area6-3"><span class="link_blue">マッサージピールについて詳しくはこちら</span></a>
                  </div>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2-2_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>ヴェルヴェットスキン(ダーマペン4＋マッサージピール)顔</td>
                      <td>¥49,500 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>ヴェルヴェットスキン(ダーマペン4＋マッサージピール)顔＋首</td>
                      <td>¥74,800 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area2-2 END -->
          <div id="area2-3" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">ヴァンパイアフェイシャル</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                ヴァンパイアフェイシャル<br class="">(ダーマペン4×PFC治療)
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2-3_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">アンチ<br class="">エイジング</span></li>
                <li><span class="">美肌</span></li>
                <li><span class="">シワの改善</span></li>
                <li><span class="">クレーター<br class="">傷跡の改善</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    ヴァンパイアフェイシャルとはPFCとダーマペン４を組み合わせた治療です。ダーマペンを使ってあけた小さな穴に自己血から作成したPFCを直接塗布することで有効成分を確実にお肌に浸透させることができます。
                  </p>
                  <ul class="check_list">
                    <li>ダーマペンとPFCの相乗効果によりお肌の修復・再生作用を高め高いアンチエイジング効果と美肌効果が期待できます。</li>
                    <li>線維芽細胞を活性、また肌の保水効果を高めハリと弾力のある肌に導きます。</li>
                    <li>⾃⼰組織由来で余計な添加物は⼀切使⽤しないためアレルギーや副作⽤の⼼配が少なく安全性が高いのも特徴です。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area2-3_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="sp_col1 flex">
                <div class="col_3-2 mb30">
                  <div class="box_red mb20 gosic">
                    <p>
                      ヴァンパイアフェイシャルは自己血から作成したPFCを1～3アンプル使用します。<br class="">PFCの作成には約3週間ほどかかります。
                    </p>
                  </div><!-- box-red END -->
                  <div class="link_blue tc gosic">
                    <a href="https://fumibeauty.jp/pfc/">PFC治療について詳しくはこちら</a>
                  </div>
                </div><!-- inner END -->
              </div><!-- flex END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>ヴァンパイアフェイシャル(ダーマペン4×PFC)顔</td>
                      <td>¥66,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>ヴァンパイアフェイシャル(ダーマペン4×PFC)顔＋首</td>
                      <td>¥88,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>ヴァンパイアフェイシャル(ダーマペン4×PFC)1部位</td>
                      <td>¥44,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>※PFC作成費用(6バイアル分)別途¥132,000かかります。</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area2-3 END -->
          <div id="area2-4" class="menu_option">
            <div class="inner">
              <div class="box_blue">
                <h2 class="tc mb30">その他オプションメニュー</h2>
                <div class="menu_option_item">
                  <h3 class="tc">ダーマペン4×フィロルガ注射</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">美肌</span></li>
                    <li><span class="">肌トラブル<br class="">の改善</span></li>
                    <li><span class="">潤い</span></li>
                    <li><span class="">シワの改善</span></li>
                  </ul>
                  <p>
                    ダーマペンを使ってあけた小さな穴にフィロルガを直接塗布することで有効成分を確実にお肌に浸透させます。フィロルガには超高濃度ヒアルロン酸・アミノ酸・ミネラル・ビタミン・ヌクレオチド・コエンザイム・抗酸化成分等沢山の美容成分が含まれており、肌トラブルの改善・エイジングケア・美肌ケアに効果的です。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item">
                  <h3 class="tc">ダーマペン4×白雪注射</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">美白</span></li>
                    <li><span class="">色素沈着の<br class="">改善</span></li>
                    <li><span class="">色むらの<br class="">改善</span></li>
                    <li><span class="">しみ・くすみ<br class="pc">の改善</span></li>
                  </ul>
                  <p>
					  snow white Cellはダメージを受けた皮膚に使用することで、肌再生を促し、美白や保湿、キメを改善させます。サーモンDNA、グルタチオン、ヒアルロン酸が配合され、美白効果、肌のトーンの改善、赤みの改善、保湿力の向上、キメの改善などの効果が期待できます。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item">
                  <h3 class="tc">ダーマペン4×ボトックス</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">皮脂分泌の<br class="">抑制</span></li>
                    <li><span class="">毛穴の<br class="">引締め</span></li>
                    <li><span class="">小じわの<br class="">改善</span></li>
                    <li><span class="">ニキビの<br class="">改善</span></li>
                  </ul>
                  <p>
                    ダーマペン4とボトックスを組合わせた治療です。ボトックスが皮膚に浸透する事で皮脂分泌を抑制し、テカリをおさえたり、ニキビの改善・毛穴の引締めに効果的です。また目元や口元の小じわやちりめんジワの改善にもおすすめです。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item mb30">
                  <h3 class="tc">ダーマペン4×トラネキサム酸 </h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">美白</span></li>
                    <li><span class="">肝斑の改善</span></li>
                    <li><span class="">しみ・くすみ<br class="pc">の改善</span></li>
                    <li><span class="">肌荒れの<br class="">改善</span></li>
                  </ul>
                  <p>
                    肌の自己回復力による美肌効果と美容成分を皮膚に浸透させるという相乗効果が期待できます。トラネキサム酸にはメラニンの生成を抑える美白効果と抗炎症作用があるため全体的な美白効果、肝斑の改善効果などが期待できます。
                  </p>
                </div><!-- menu_option_item END -->
                <div class="price">
                  <h3 class="tc">料金</h3>
                  <table class="price_list gosic">
                    <tbody>
                      <tr class="flex">
                        <td>フィロルガ注射</td>
                        <td>＋¥28,000 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>白雪注射</td>
                        <td>＋￥16,500 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>ボトックス</td>
                        <td>＋￥16,500 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>トラネキサム酸</td>
                        <td>＋￥5,500 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>※別途ダーマペン4施術料金がかかります。</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- price END -->
              </div><!-- box_blue END -->
            </div><!-- inner END -->
          </div><!-- area2-4 END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area2 END -->
    <section id="area3">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area3_icon.png" alt=""></span>リニアハイフ</h2>
            <p class="txt_lead tc">
              リニアハイフは、熱エネルギーによりコラーゲンの新形成を促進し、きゅっと<br class="pc">引き締まった美肌に導きます。<br class="sp">血流もよくなりお肌がトーンアップ！<br class="">くすみが気になる方・赤みが気になる方にもおすすめです。
            </p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>美肌・透明感</li>
                <li>たるみ毛穴の改善</li>
                <li>酒さ等の赤みの改善</li>
                <li>小顔効果</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
                <li>肌にハリや艶がほしい</li>
                <li>たるみ毛穴が気になる</li>
                <li>肌がくすんで見える、透明感を出したい</li>
                <li>シュッと引き締まった小顔になりたい</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                ウルトラセルQ＋の最新リニアカートリッジは、点状に熱エネルギーを与える従来のものではなく、線上に熱エネルギーを与えます。リニア2.0では、真皮層をターゲットに58℃の線状の熱エネルギーを与えます。変性したコラーゲンを修復しようとその部分に新しくコラーゲンが形成されます。</p>
                <ul class="check_list">
                  <li>コラーゲンが新形成され肌がきゅっと引き締まることにより、たるみ毛穴がなくハリとキメのある滑らかな美肌に導きます。</li>
                  <li>真皮層にある毛細血管にもアプローチし、血流がよくなるので肌の透明感が出てトーンアップします。</li>
                  <li>酒さ等の赤みにも効果的です。</li>
                </ul>
                <div class="tc gosic">
                  <a href="https://fumibeauty.jp/hifu/"><span class="link_blue link_riniahaifu">ウルトラセルQ＋について<br class="sp">詳しくはこちら</span></a>
                </div>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area3_img_01.jpg" alt=""></div>
            </div>
          </div>
          <div class="flow bg_gray_box inner mb30">
            <h3 class="tc">リニアハイフ 施術の流れ</h3>
            <ol class="flow_step">
              <li><span class="gosic">診察・カウンセリング</span></li>
              <li><span class="gosic">メイクオフ・洗顔</span></li>
              <li><span class="gosic">施術前撮影</span></li>
              <li><span class="gosic">施術</span></li>
              <li><span class="gosic">施術後撮影</span></li>
              <li><span class="gosic">終了</span></li>
            </ol>
          </div><!-- flow END -->
          <div class="price inner">
            <h3 class="tc">料金</h3>
            <table class="price_list gosic">
              <tbody>
                <tr class="flex">
                  <td>リニアカートリッジ 2.0mm</td>
                  <td>¥55,000 (税込)</td>
                </tr>
                <tr class="flex">
                  <td>※1ヶ月以内の再施術</td>
                  <td>¥49,500 (税込)</td>
                </tr>
              </tbody>
            </table>
          </div><!-- price END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area3 END -->
    <section id="area4">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area4_icon.png" alt=""></span>美容点滴</h2>
            <p class="txt_lead tc">
              血管を通してダイレクトに点滴の成分を投与し、体の内面から綺麗にすることを目的にする施術です。<br class="">アンチエイジング・健康維持・疲労回復など幅広い効果が期待できます。
            </p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>いつまでも若々しく健康でいたい</li>
                <li>エイジングケアがしたい</li>
                <li>美肌を保ちたい</li>
                <li>免疫力を上げたい</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
                <li>慢性的な疲れがとれない</li>
                <li>身体ががだるい</li>
                <li>デトックスしたい</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                点滴治療は血管内ににダイレクトに成分を注入することができるので、効率的に体の隅々にまで成分を巡らせることができます。サプリメントや食事からの摂取は腸の消化吸収から血中に取り込まれるため、消化能力など体調に左右されたり効果が表れるまで時間がかかります。一方美容点滴は、血管内に直接注射することでより多くの量をすばやく体内に取り込めて、効果の実感も早いのが特徴です。<br class="">当院では様々なお悩みに合わせた美容点滴のメニューをご用意しており、当日のコンディションによって内容を決めていただけます。
              </p>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area4_img_01.jpg" alt=""></div>
            </div>
          </div>
          <div class="menu_info bg_gray_box inner mb30">
            <h2 class="tc bold">当院では点滴専用ブースを<br class="sp">ご用意しております</h2>
            <div class="sp_col1 flex">
              <div class="col_2-1 mb20">
                <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area4_img_02.jpg" alt="">
              </div>
              <div class="col_2-1">
                <p class="gosic">
                  当院の点滴ブースは明るく換気のできるスペースになっております。<br class="">お連れ様同士が一緒に並んで受けて頂くこともできますし、カーテンを引いてプライべートスペースでゆったり落ち着いて受けて頂くことも可能です。<br class="">リクライニングができるチェアになっておりますのでお休みになりながらの点滴も可能です。
                </p>
              </div>
            </div><!-- flex END -->
          </div><!-- menu_info END -->
          <div class="flow bg_gray_box inner mb30">
            <h3 class="tc">美容点滴 施術の流れ</h3>
            <ol class="flow_step">
              <li><span class="gosic">診察・カウンセリング</span></li>
              <li><span class="gosic">施術</span></li>
              <li><span class="gosic">終了</span></li>
            </ol>
          </div><!-- flow END -->
          <div class="btn_ancor btn_ancor_small inner mb30 mt50">
            <a href="#area4-1"><span class="">高濃度<br class="sp">ビタミンC点滴</span></a><a href="#area4-2"><span class="">疲労回復点滴<br class="pc">(マイヤーズカクテル)</span></a><a href="#area4-3"><span class="">白玉点滴<br class="">(グルタチオン)</span></a><a href="#area4-4"><span class="">プラセンタ注射</span></a>
          </div><!-- btn_ancor END -->
          <div id="area4-1" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">高濃度ビタミンC点滴</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                高濃度ビタミンC点滴による、<br class="sp">強力な抗酸化作用を得ることができます。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">美肌・美白</span></li>
                <li><span class="">エイジング<br class="pc">ケア</span></li>
                <li><span class="">免疫力の<br class="">向上</span></li>
                <li><span class="">がん予防</span></li>
                <li><span class="">疲労回復<br class="">抗ストレス効果</span></li>
                <li><span class="">生活習慣病<br class="">
                  改善効果</span></li>
                <li><span class="">抗アレルギー<br class="pc">作用</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    高濃度ビタミン点滴とは、サプリメントや内服薬では絶対に摂ることのできない高濃度のビタミンCを静脈内に点滴投与して、ビタミンCの血液中の濃度を一気に高める治療法をいいます。
                  </p>
                  <ul class="check_list">
                    <li>ビタミンCの血中濃度を急激に高めることにより、とても強力な抗酸化作用が発揮されます。</li>
                    <li>ガン予防・アンチエイジング効果・美肌効果・免疫力向上・身体機能の改善など様々な効果を得ることができます。</li>
                  </ul>
                </div>
              </div><!-- pc_w80 END -->
              <div class="mb30">
                <div class="box_red gosic">
                  <p>
                    高濃度ビタミンC25g以上をご希望の場合は、初回のみG6PD検査を受けていただきます。G6PD検査とは大容量の高濃度ビタミンCで急性溶血発作が起こらないかどうかを確認する検査です。<br class="">他院で検査が済んでいる方はその検査結果をお持ちいただければ当院での再検査は必要ありません。
                  </p>
                </div><!-- box-red END -->
              </div>
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>高濃度ビタミンc点滴 25gまで</td>
                      <td>¥13,200 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>高濃度ビタミンc点滴 50gまで</td>
                      <td>¥16,500 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>G6PD検査</td>
                      <td>￥6,600 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area4-1 END -->
          <div id="area4-2" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">疲労回復点滴<br class="sp">(マイヤーズカクテル)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                マイヤーズカクテルは、<br class="sp">慢性的な疲労の回復に効果的です。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">美肌・肌荒れ<br class="pc">改善</span></li>
                <li><span class="">疲労回復<br class="">ケア</span></li>
                <li><span class="">免疫⼒の<br class="">向上</span></li>
                <li><span class="">新陳代謝の<br class="">向上</span></li>
                <li><span class="">うつ症状の<br class="">改善</span></li>
                <li><span class="">アレルギー<br class="">疾患の改善</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    マイヤーズカクテルは1950年代に米国の医師ジョン・マイヤーズ医師が考案した、治癒力を高める点滴療法です。マイヤーズカクテルには身体にとって必要不可欠な、身体の機能を整える成分であるビタミンやミネラルがバランスよく含まれています。
                  </p>
                  <ul class="check_list">
                    <li>とても強い疲労回復効果が期待できます。</li>
                    <li>気管⽀喘息、偏頭痛、線維筋痛症、アレルギー性⿐炎などのアレルギー疾患、頭痛、全⾝倦怠感、疲労感、慢性疲労症候群、うつ病、こむら返り、⼼不全、狭⼼症、慢性蕁⿇疹、甲状腺機能亢進症、⽣理不順などの症状や⽿鳴、⾃律神経障害、不定愁訴症候群などにも有効です。</li>
                  </ul>
                </div>
              </div><!-- pc_w80  END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>疲労回復点滴</td>
                      <td>¥3,300 (税込)<br>※強ミノ追加<br>1本あたり¥275</td>
                    </tr>
                    <tr class="flex">
                      <td>疲労回復点滴(マイヤーズカクテル)</td>
                      <td>¥6,600 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area4-2 END -->
          <div id="area4-3" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">白玉点滴(グルタチオン)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                白玉点滴は、美白効果を期待したい方におすすめです。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">美肌効果</span></li>
                <li><span class="">美白効果</span></li>
                <li><span class="">エイジング<br class="">ケア</span></li>
                <li><span class="">疲労回復</span></li>
                <li><span class="">アレルギー<br class="">疾患の改善</span></li>
                <li><span class="">デトックス<br class="">作用</span></li>
                <li><span class="">二日酔いの<br class="">予防・改善</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    白玉点滴の主成分であるグルタチオンは大きく分けると”お肌”と”肝機能”に効果が期待できます。グルタチオンは抗酸化作用が高く、活性酸素を除去するだけでなく、メラニンの生成を強力に抑制するのが特徴です。
                  </p>
                  <ul class="check_list">
                    <li>既に溜まったメラニンを排出することができるため、日焼け前後のケアやシミや肝斑、色素沈着など肌の美白にも有効です。</li>
                    <li>肝臓の解毒作用が高まるので、お酒を飲まれる前や二日酔いの改善、慢性疲労の改善、ストレスの緩和、不眠なども症状の改善、免疫力向上にも効果が期待できます。</li>
                  </ul>
                </div>
              </div><!-- pc_w80 END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>白玉点滴(グルタチオン1200mg)</td>
                      <td>¥8,800 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area4-3 END -->
          <div id="area4-4">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">プラセンタ注射</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                プラセンタは美肌・アンチエイジング・ホルモンバランス等<br class="pc">さまざまなお悩みの改善に効果的です。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">エイジング<br class="">ケア</span></li>
                <li><span class="">美肌効果</span></li>
                <li><span class="">自律神経を<br class="">整える</span></li>
                <li><span class="">体質改善</span></li>
                <li><span class="">血行促進</span></li>
                <li><span class="">ホルモンバランス<br class="pc">を整える</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    プラセンタ注射は人の胎盤から抽出された成分を使用して行われる注射です。現在、厚生労働省で認可されているヒト由来プラセンタは”ラエンネック”・”メルスモン”の2種類で、当院ではどちらもご用意がございます。通常は効果の持続が長い筋肉・皮下注射で行っております。
                  </p>
                  <ul class="check_list">
                    <li>アンチエイジング効果・美肌効果・美白効果などお肌に嬉しい作用に加え、抗炎症作用、抗アレルギー作用、疲労回復、更年期障害の緩和、血行促進作用による冷え性の改善、自律神経やホルモンバランスを整える作用、基礎代謝向上など様々な症状に効果的です。</li>
                    <li>美肌効果をより出したい場合は顔のプラセンタツボ注射もおすすめです。</li>
                  </ul>
                </div>
              </div><!-- pc_w80 END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>プラセンタ注射１本</td>
                      <td>¥1,650 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>プラセンタ注射 ２本目以降</td>
                      <td>¥1,100 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>プラセンタチケット(30本分)</td>
                      <td>¥33,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>プラセンタ顔ツボ注射</td>
                      <td>¥5,500 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>プラセンタ顔ツボ注射チケット(10回分)</td>
                      <td>¥44,000 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>肩こりプラセンタ</td>
                      <td>¥11,000 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area4-4 END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area4 END -->
    <section id="area5">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area5_icon.png" alt=""></span>クイーンリフト</h2>
            <p class="txt_lead tc">
              1台で毛穴汚れとお顔のもたつきを徹底ケアできる美容マシンです。
            </p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>ダウンタイムのない肌のエイジングケアがしたい</li>
                <li>肌のハリ感や弾力をアップさせたい</li>
                <li>顔のたるみや緩みが気になる</li>
                <li>小顔になりたい</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
                <li>輪郭をすっきりさせたい</li>
                <li>目元をぱっちりさせたい</li>
                <li>毛穴や肌のザラツキが気になる</li>
                <li>肌がくすんで見える、透明感を出したい</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                クイーンリフトは毛穴の汚れと顔のもたつきを徹底ケアできる進化型デザイニング美容マシンです。毛穴のつまり、肌基盤のゆるみ、肌の土台の衰え、弾力不足などを改善し理想の美しいお顔に導きます。
              </p>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area5_img_01.jpg" alt=""></div>
            </div>
          </div>
          <div class="menu_info bg_gray_box inner mb30">
            <h2 class="tc bold">クイーンリフトの4つの機能</h2>
            <div class="sp_col1 flex">
              <div class="sp mb20">
                <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area5_img_02.jpg" alt="">
              </div>
              <div class="col_3-2">
                <div class="mb30">
                  <h3 class="gosic">①ソニックピールプローブ【毛穴の詰まりに】</h3>
                  <p class="gosic">
                    ヤーマン独自のカップ形状のヘッドが、お肌を優しく面で捉え、Tゾーン、Uゾーンにしっかりフィット。毎秒90,000回の超音波振動とイオン導出により、詰まり毛穴をスッキリさせます。
                  </p>
                </div>
                <div class="mb30">
                  <h3 class="gosic">②サーモソニックプローブ【肌基盤のゆるみに】</h3>
                  <p class="gosic">
                    特許技術のラジオ波と超音波を搭載。3MHzのラジオ波で深層温熱トリートメント。さらに、超音波のダブルの力でお肌にハリを与え、肌基盤を引き締めます。
                  </p>
                </div>
              </div>
              <div class="pc col_3-1 mb20">
                <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area5_img_02.jpg" alt="">
              </div>
            </div><!-- flex END -->
            <div class="mb30">
              <h3 class="gosic">③美創筋プローブ【肌の土台の衰えに】</h3>
              <p class="gosic">
				  特殊な4電極によるドレナージュタッピングシステムにより、普段使わずに固くなった筋肉を刺激。きゅっと引き締まった理想のフェイスラインへ導きます。
              </p>
            </div>
            <div class="mb30">
              <h3 class="gosic">④TPSプローブ【肌の弾力不足に】</h3>
              <p class="gosic">
				  ヤーマン史上最高の導入技術TPSにより、高分子美容成分を肌深部まで浸透導入サポートします。
              </p>
            </div>
          </div><!-- menu_info END -->
          <div class="btn_ancor inner mb30 mt50">
            <a href="#area5-1"><span class="">プレミアム<br class="sp">リフトアップコース</span></a><a href="#area5-2"><span class="">リフトアップコース</span></a><a href="#area5-3"><span class="">クイック<br class="sp">リフトアップコース</span></a>
          </div><!-- btn_ancor END -->
          <div id="area5-1" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">プレミアムリフトアップコース</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                クイーンリフトの効果をより高めたプレミアムコースです。<br class="">最上級の仕上がりを目指す方に。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">リフトアップ</span></li>
                <li><span class="">小顔</span></li>
                <li><span class="">美肌</span></li>
                <li><span class="">ハリ感<br class="">透明感</span></li>
                <li><span class="">保湿</span></li>
                <li><span class="">毛穴</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    クイーンリフトの効果をより高めるためにその方のお肌に合わせたマッサージと美肌パックがセットになったスペシャルコースです。
                  </p>
                </div>
              </div><!-- pc_w80 END -->
            </div><!-- inner END -->
            <div class="flow bg_gray_box inner mb30">
              <h3 class="tc">プレミアムリフトアップコース 施術の流れ</h3>
              <ol class="flow_step">
                <li><span class="gosic">クレンジング・洗顔</span></li>
                <li><span class="gosic">写真撮影</span></li>
                <li><span class="gosic">毛穴クレンジング(ソニックピールプローブ)</span></li>
                <li><span class="gosic">サーモソニックプローブ</span></li>
                <li><span class="gosic">美創筋プローブ</span></li>
                <li><span class="gosic">マッサージ</span></li>
                <li><span class="gosic">美容液導入(TPSプローブ)</span></li>
                <li><span class="gosic">美肌パック</span></li>
                <li><span class="gosic">整肌</span></li>
              </ol>
            </div><!-- flow END -->
            <div class="inner">
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>プレミアムリフトアップコース</td>
                      <td>¥23,100 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area5-1 END -->
          <div id="area5-2" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">リフトアップコース</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                クイーンリフトの全ての機能がくみこまれたベーシックコースです。<br class="">定期的なメンテナンスケアに。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">リフトアップ</span></li>
                <li><span class="">小顔</span></li>
                <li><span class="">美肌</span></li>
                <li><span class="">ハリ感<br class="">透明感</span></li>
                <li><span class="">保湿</span></li>
                <li><span class="">毛穴</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    クイーンリフトの4つの機能がすべて組み込まれたバランスのいいベーシックコースです。
                  </p>
                </div>
              </div><!-- pc_w80 END -->
            </div><!-- inner END -->
            <div class="flow bg_gray_box inner mb30">
              <h3 class="tc">リフトアップコース 施術の流れ</h3>
              <ol class="flow_step">
                <li><span class="gosic">クレンジング・洗顔</span></li>
                <li><span class="gosic">写真撮影</span></li>
                <li><span class="gosic">毛穴クレンジング(ソニックピールプローブ)</span></li>
                <li><span class="gosic">サーモソニックプローブ</span></li>
                <li><span class="gosic">美創筋プローブ</span></li>
                <li><span class="gosic">美容液導入(TPSプローブ)</span></li>
                <li><span class="gosic">整肌</span></li>
              </ol>
            </div><!-- flow END -->
            <div class="inner">
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>リフトアップコース</td>
                      <td>¥19,800 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area5-2 END -->
          <div id="area5-3">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">クイックリフトアップコース</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                短時間でお顔を引き上げたい方に<br class="sp">おすすめのクイックコースです。
              </p>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">リフトアップ</span></li>
                <li><span class="">小顔</span></li>
                <li><span class="">くすみ</span></li>
              </ul>
              <div class="pc_w80 mb30">
                <div class="gosic">
                  <p class="mb20">
                    クイーンリフトのリフトアップ機能のみを行うクイックコースです。短時間の施術をご希望の方や、ほかのコースとの組合せもお勧めです。
                  </p>
                </div>
              </div><!-- pc_w80 END -->
            </div><!-- inner END -->
            <div class="flow bg_gray_box inner mb30">
              <h3 class="tc">クイックリフトアップコース 施術の流れ</h3>
              <ol class="flow_step">
                <li><span class="gosic">クレンジング・洗顔</span></li>
                <li><span class="gosic">写真撮影</span></li>
                <li><span class="gosic">サーモソニックプローブ</span></li>
                <li><span class="gosic">美創筋プローブ</span></li>
                <li><span class="gosic">整肌</span></li>
              </ol>
            </div><!-- flow END -->
            <div class="inner">
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>クイックリフトアップコース</td>
                      <td>¥16,500 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area5-3 END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area5 END -->
    <section id="area6">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6_icon.png" alt=""></span>各種ピーリング</h2>
            <p class="txt_lead tc">
              ピーリングとは、薬剤を用いて皮膚表面の余分な角質を除去することで、肌のターンオーバーを促す施術です。<br class="">新しい皮膚の再生を活性化させ、肌質を改善させたい方におすすめです。
            </p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>お肌のトータルエイジングケアがしたい</li>
                <li>美肌になりたい</li>
                <li>ニキビ・ニキビ跡を改善したい</li>
                <li>毛穴のつまりや肌のザラツキが気になる</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
                <li>くすみのない透明感のある肌になりたい</li>
                <li>肝斑・シミを改善したい</li>
                <li>くすみを改善したい</li>
                <li>ハリや弾力をだしたい</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                ピーリングとは、薬剤を用いて肌表面のいらなくなった角質を除去することで、肌のターンオーバーや再生を促す施術です。また皮膚の内部に浸透させてコラーゲンの再生や修復、生産を促したり、肌内部からのターンオーバーを促すピーリングも人気です。<br class="">使用する薬剤によってその効果もかわってきますので、当院ではおひとりおひとりのお肌状態にあったピーリングを提案しております。
              </p>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6_img.jpg" alt=""></div>
            </div>
          </div>
          <div class="btn_box inner mt50">
            <a href="https://fumibeauty.jp/faq_kind/me/" class="btn_case gosic mb30">各種ピーリング 症例写真はこちら</a>
          </div><!-- btn_box END -->
          <div class="btn_ancor inner mb30">
            <a href="#area6-1"><span class="">ベビーピール<br class="pc">(サリチル酸マクロゴール)</span></a><a href="#area6-2"><span class="">ミックスピールPlus</span></a><a href="#area6-3"><span class="">マッサージピール<br class="pc">(コラーゲンピール)</span></a><a href="#area6-4"><span class="">トックスピール<br class="pc">(成長因子ピーリング)</span></a><a href="#area6-5"><span class="">レチノールピール<br class="pc">(イエローピール)</span></a>
          </div><!-- btn_ancor END -->
          <div id="area6-1" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">ベビーピール<br class="sp">(サリチル酸マクロゴール)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                古く硬くなった角質層を取り除き、肌のターンオーバーを促進することにより肌質を改善し美肌に導きます。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-1_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">ニキビ<br class="">ニキビ跡</span></li>
                <li><span class="">毛穴<br class="">ざらつき</span></li>
                <li><span class="">美白・透明感</span></li>
                <li><span class="">美肌</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    ベビーピール（サリチル酸マクロゴールピーリング）は、ケミカルピーリングの１つです。サリチル酸(BHAの一種)はピーリング効果が高い反面、皮膚への浸透力が強すぎて、炎症・赤み・痛みといった副作用がありましたが、ベビーピールはサリチル酸とマクロゴールを混ぜることで皮膚の深部まで浸透するのを防ぎ角質層のみに効果をもたらす安全なピーリング剤となりました。<br class="">肌に塗布することで、古く硬くなった角質層を取り除き、肌のターンオーバーを促進することにより肌質を改善し美肌に導きます。
                  </p>
                  <ul class="check_list">
                    <li>ターンオーバーを整えるとともに、サリチル酸の微生物に対する抗菌作用により肌の表面に増殖しているニキビの原因菌を殺菌しニキビを改善します。</li>
                    <li>毛穴の汚れを奥から溶かし取り、ザラツキの改善や毛穴の引きしめを行います。</li>
                    <li>肌のターンオーバーを促進することで、既に出来たしみ、色素沈着を改善し、全体的にくすみを取り除き透明感のある肌に導きます。また定期的に行うことで、メラニンが蓄積されにくくなることで、しみ予防も期待できます。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-1_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">ベビーピール 施術の流れ</h3>
                <ol class="flow_step mb30">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">ベビーピール塗布</span></li>
                  <li><span class="gosic">ふき取り・鎮静</span></li>
                  <li><span class="gosic">導入・パック等(オプション)</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>ベビーピール(サリチル酸マクロゴール)１回</td>
                      <td>¥11,000 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area6-1 END -->
          <div id="area6-2" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">ミックスピールPlus</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                3種類の酸と配合された美容成分がそれぞれの効果を発揮し<br class="">透明感のある美肌に導きます。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-2_img.jpg" alt=""></div>
              <ul class="menu_problem menu_problem_wide sp_w80 flex fw jc-cent tc mb30">
                <li><span class="">美白・透明感</span></li>
                <li><span class="">肝斑・シミ<br class="">色素沈着</span></li>
                <li><span class="">ニキビ<br class="">ニキビ跡</span></li>
                <li><span class="">毛穴<br class="">ざらつき</span></li>
                <li><span class="">美肌</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    ミックスピールプラスは天然乳酸（L‐乳酸）を主体に、グリコール酸とサリチル酸、ビタミンA誘導体とアーティーチョークエキス（地中海岸、北アフリカ原産の植物）が配合された純国産のピーリングです。それぞれの酸の分子量の違いや薬理作用などの特性がミックスされ、相乗効果により、お肌の透明感や滑らかさがアップし、お肌の様々なお悩みに働きかけます。主となる乳酸は、保湿・美白・しわを減少させる効果がある薬剤として知られています。
                  </p>
                  <ul class="check_list">
                    <li>乳酸には特有の美肌作用がありそれにより美白や美肌、艶肌に導きます。</li>
                    <li>アーティーチョークエキスはグルタチオン産生を促進することから、美白効果やシミ予防が期待できます。</li>
                    <li>グリコール酸 ・ 乳酸 ・ サリチル酸を同時に利かせることに、お肌への優しさも保ちながら高い効果を期待できます。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-2_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">ミックスピールPlus 施術の流れ</h3>
                <ol class="flow_step mb30">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">酵素によるお肌の前処理(タンパク分解酵素プロテアーゼ配合の専用ジェル使用)                  </span></li>
                  <li><span class="gosic">ミックスピールプラス塗布</span></li>
                  <li><span class="gosic">中和</span></li>
                  <li><span class="gosic">ふき取り・鎮静</span></li>
                  <li><span class="gosic">導入・パック等(オプション)</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
                <div class="box_red gosic">
                  <p>
                    薬剤を塗布したままご帰宅いただき、4～6時間後に洗い流していただきます。直後のメイクは避けて頂いております。
                  </p>
                </div><!-- box-red END -->
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>ミックスピールPlus</td>
                      <td>¥13,200 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area6-2 END -->
          <div id="area6-3" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">マッサージピール<br class="sp">(コラーゲンピール)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                真皮層まで届くエイジングケアに特化したピーリングです。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-3_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">肌のハリ・艶</span></li>
                <li><span class="">小じわの改善</span></li>
                <li><span class="">しみ・肝斑<br class="">
                  くすみの改善</span></li>
                <li><span class="">毛穴の開き</span></li>
                <li><span class="">ニキビ跡の凹凸</span></li>
                <li><span class="">ストレッチ<br class="">マーク</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    マッサージピールとは高濃度トリクロロ酢酸(TCA33％)・低濃度過酸化水素(H₂O₂)・コウジ酸(5％)を主成分とするピーリング液剤「PRX-T33」です。ヨーロッパCEの承認を受けている安全性の高い製剤です。過酸化水素の作用で高濃度トリクロロ酢酸の皮膚の剝離作用を最小限に抑制し真皮層まで働きかけ、コラーゲンの生産を促します。<br class="">剝がさないのに真皮深層まで到達する効果の高い画期的なピーリングです。
                  </p>
                  <ul class="check_list">
                    <li>トリクロロ酢酸にはバイオリバイタライジング作用(線維芽細胞・成長因子の増殖などによるコラーゲンの再生)があり、肌のハリ弾力をUPさせ、ニキビ跡や傷跡の凹凸を改善に効果的です。</li>
                    <li>低濃度過酸化水素がトリクロロ酢酸の強いピーリング作用を抑制して表皮を保護し、トリクロロ酢酸のバイオリバイタライジング作用をより高めます。</li>
                    <li>コウジ酸がシミの元となるメラニンの生成を抑制しシミやくすみ、肝斑や色素沈着にもアプローチ。透明美肌に導きます。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-3_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">マッサージピール 施術の流れ</h3>
                <ol class="flow_step mb30">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">マッサージピール塗布</span></li>
                  <li><span class="gosic">ふき取り・鎮静</span></li>
                  <li><span class="gosic">導入・パック等(オプション)</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>マッサージピール(コラーゲンピール)  顔</td>
                      <td>¥16,500 (税込)</td>
                    </tr>
                    <tr class="flex">
                      <td>マッサージピール(コラーゲンピール)  顔・首</td>
                      <td>¥25,300 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area6-3 END -->
          <div id="area6-4" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">トックスピール<br class="sp">(成長因子ピーリング)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                ピーリングと同時に成長因子IGF・FGFを肌に浸透させます。<br class="">肌そのものを美しく若返らせる効果があります。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-4_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">アンチ<br class="">エイジング</span></li>
                <li><span class="">小じわの改善</span></li>
                <li><span class="">ハリ<br class="">弾力UP</span></li>
                <li><span class="">美白・潤い</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    グリコール酸・乳酸・サリチル酸の3種類と肌細胞の若返り効果を促進させる成長因子（EGF、FGF、ナイアシンアミドなど）を配合されています。角質ケアを行うと同時に成長因子等の有効成分がお肌に浸透し美肌効果をもたらします。<br class="">ヨーロッパでは14年以上前から使用されている安全性が高い人気のピーリングです。
                  </p>
                  <ul class="check_list">
                    <li>ピーリングと同時に成長因子を入れ込むことでより肌深層まで有効成分が届き効果が高くなります。</li>
                    <li>肌再生成長因であるのEGFとFGFをダブル配合。肌再生を促し若々しい美肌に導きます。</li>
                    <li>塗るボツリヌストキシン”アルジルリン”を配合しており、目の周りなどの小ジワにも効果的です。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-4_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">トックスピール 施術の流れ</h3>
                <ol class="flow_step mb30">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">トックスピール塗布</span></li>
                  <li><span class="gosic">ふき取り・鎮静</span></li>
                  <li><span class="gosic">導入・パック等(オプション)</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>トックスピール(成長因子ピーリング)１回</td>
                      <td>¥16,500 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area6-4 END -->
          <div id="area6-5" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">レチノールピール<br class="sp">(イエローピール)</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                ”レチノール”の効果で様々な肌トラブルの改善やアンチエイジングに<br class="">効果的なピーリングです。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-5_img.jpg" alt=""></div>
              <ul class="menu_problem flex fw jc-cent tc mb30">
                <li><span class="">ハリ<br class="">弾力UP</span></li>
                <li><span class="">ニキビ<br class="">ニキビ跡</span></li>
                <li><span class="">テカリや毛穴の開きの改善</span></li>
                <li><span class="">シミ<br class="">色素沈着</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    別名イエローピールとも呼ばれており、スペインのmedi+derma社の製剤です。美容効果が高いといわれるレチノイン酸の有効性に着目したピーリング剤で、肌刺激の強いレチノイン酸の前段階の”レチノール誘導体”をナノカプセル化し刺激を抑えことで、従来よりも赤みや刺激、痛みなどの肌トラブルを抑えながら肌の内側から効果を引き出すことが可能になりました。<br class="">さらに肌の酸化（フリーラジカル）から守る亜鉛と、レチノールの働きを後押しするヒアルロン酸も配合されておりその相乗効果がにより細胞が新たなヒアルロン酸の生成を促します。
                  </p>
                  <ul class="check_list">
                    <li>線維芽細胞が刺激されコラーゲンが増えることで小ジワが目立たなくなります。</li>
                    <li>真皮内の血管新生を促して、皮膚の血行を改善させるため、くすみのない透明感のある肌に導きます。</li>
                    <li>角質層が回復することでバリア機能が高まり乾燥や赤みを改善します。</li>
                    <li>ターンオーバーを正常化することで毛穴やシミの改善、また皮脂分泌を抑制することでテカリやニキビの予防・改善に効果的です。</li>
                  </ul>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area6-5_img.jpg" alt="">
                </div>
              </div><!-- flex END -->
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">レチノールピール 施術の流れ</h3>
                <ol class="flow_step mb30">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">レチノールピール塗布</span></li>
                  <li><span class="gosic">専用クリーム塗布</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
                <div class="box_red gosic">
                  <p>
                    薬剤を塗布したままご帰宅いただき、4～6時間後に洗い流していただきます。直後のメイクは避けて頂いております。
                  </p>
                </div><!-- box-red END -->
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>レチノールピール(イエローピール)１回</td>
                      <td>¥22,000 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area6-5 END -->
          <div id="area6-6" class="menu_option">
            <div class="inner">
              <div class="box_blue">
                <h2 class="tc mb30">その他オプションメニュー</h2>
                <div class="menu_option_item">
                  <h3 class="tc">マルチビタミンパック導入</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">ニキビ<br class="">ニキビ跡</span></li>
                    <li><span class="">皮脂分泌<br class="">の抑制</span></li>
                    <li><span class="">肌荒れ</span></li>
                    <li><span class="">美肌・美白</span></li>
                  </ul>
                  <p>
                    ビタミンA・C・E・Bなどがバランスよく配合された美容ジェルです。パックよる鎮静をしながら同時に有効成分を肌に導入します。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item">
                  <h3 class="tc">ペプチドパック導入</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">アンチ<br class="">エイジング</span></li>
                    <li><span class="">ハリ<br class="">弾力UP</span></li>
                    <li><span class="">美白<br class="">透明感</span></li>
                    <li><span class="">保湿</span></li>
                  </ul>
                  <p>
                    線維芽細胞やコラーゲン、DEJに働きかける4種のペプチドとメリタージュという中国の伝統薬にも使用されている食物の根のエキスが配合された美容ジェルです。パックによる鎮静をしながら同時に有効成分を肌に導入します。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item">
                  <h3 class="tc">各種美容液導入</h3>
                  <p>
                    その日のお肌にあった美容成分を超音波やTPS導入によってお肌の深部に導入します。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item mb30">
                  <h3 class="tc">追加美容液トラネキサム酸</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">肝斑</span></li>
                    <li><span class="">美白<br class="">しみの改善</span></li>
                    <li><span class="">赤みの改善</span></li>
                  </ul>
                  <p>
                    どの導入のメニューにも追加していただけます。肝斑や赤みが気になる方におすすめです。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item mb30">
                  <h3 class="tc">追加美容液高濃度ビタミンC</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">美肌</span></li>
                    <li><span class="">美白</span></li>
                    <li><span class="">毛穴の引締め</span></li>
                    <li><span class="">コラーゲン<br class="">合成</span></li>
                  </ul>
                  <p>
                    どの導入のメニューにも追加していただけます。ニキビやテカリ、ニキビ跡が気になる方におすすめです。
                  </p>
                </div><!-- menu_option_item END -->
                <hr>
                <div class="menu_option_item mb30">
                  <h3 class="tc">毛穴クレンジング</h3>
                  <ul class="menu_problem flex fw jc-cent tc mb30">
                    <li><span class="">毛穴のつまり</span></li>
                    <li><span class="">ざらつき</span></li>
                    <li><span class="">くすみの改善</span></li>
                  </ul>
                  <p>
                    毛穴のつまりやザラツキが気になる方におすすめです。
                  </p>
                </div><!-- menu_option_item END -->
                <div class="price">
                  <h3 class="tc">料金</h3>
                  <table class="price_list gosic">
                    <tbody>
                      <tr class="flex">
                        <td>マルチビタミンパック導入</td>
                        <td>＋¥5,500 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>ペプチドパック導入</td>
                        <td>＋￥5,500 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>各種美容液導入</td>
                        <td>＋￥5,500 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>追加美容液トラネキサム酸</td>
                        <td>＋￥1,650 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>追加美容液高濃度ビタミンC</td>
                        <td>＋￥1,650 (税込)</td>
                      </tr>
                      <tr class="flex">
                        <td>毛穴クレンジング</td>
                        <td>＋￥3,300 (税込)</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- price END -->
              </div><!-- box_blue END -->
            </div><!-- inner END -->
          </div><!-- area6-6 END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area6 END -->
    <section id="area7" class="mb80">
      <div class="inner">
        <div class="inner_box">
          <div class="info inner">
            <h2 class="tc"><span class="info_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7_icon.png" alt=""></span>エンビロントリートメント</h2>
            <p class="txt_lead tc">
              エンビロンフェイシャルトリートメントとは、超音波導入とイオン導入で<br class="pc">効率よく浸透させる、高度なトリートメントシステムです。<br class="">お肌を保湿し整え、お肌のあらゆるトラブルに効果的です。
            </p>
          </div><!-- info END -->
          <div class="problem inner">
            <h3 class="tc"><span class="">こんなお悩みに効果的です</span></h3>
            <div class="sp_col1 flex gosic mb30">
              <ul class="problem_list tc">
                <li>美肌になりたい</li>
                <li>エイジングケアがしたい</li>
                <li>潤いのある艶肌になりたい</li>
                <li>透明感のある肌になりたい</li>
              </ul>
              <div class="problem_img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
              <ul class="problem_list tc">
                <li>ニキビ・ニキビ跡が気になる</li>
                <li>くすみや色素沈着が気になる</li>
                <li>ダウンタイムがない施術がいい</li>
              </ul>
              <div class="problem_img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/problem_img.gif" alt=""></div>
            </div>
          </div><!-- problem END -->
          <div class="sp_col1 flex inner">
            <div class="col_3-2 mb30">
              <p class="gosic">
                エンビロンは、光老化対策の先進国に在住のDr.フェルナンデスによって開発され、世界70ヶ国以上のドクターに高い信頼を得ているメディカルスキンケアです。エンビロントリートメントは”低周波ソノフォレーシス(超音波導入)”と”パルス型イオントフォレーシス(イオン導入)を組み合わせたエンビロン独自の”ソノイオンデュアルテクノロジー”技術を中心に構成されたプロフェッショナルトリートメントです。<br class="">肌状態や目的別にトリートメント内容と使用する美容成分をカウンセリングで決めていきます。専用のスキンケア製品を使用し機器とプロの技術により効果的な施術を行います。
              </p>
            </div>
            <div class="col_3-1 mb30">
              <div class="sp_w80"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7_img.jpg" alt=""></div>
            </div>
          </div>
          <div class="btn_box inner mt50">
            <a href="https://fumibeauty.jp/faq_kind/me/" class="btn_case gosic mb30">エンビロントリートメント <br class="sp">症例写真はこちら</a>
          </div><!-- btn_box END -->
          <div class="btn_ancor inner mb30">
            <a href="#area7-1"><span class="">クール<br class="sp">ビタミンコース</span></a><a href="#area7-2"><span class="">Wビタミンコース</span></a>
          </div><!-- btn_ancor END -->
          <div id="area7-1" class="mb50">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">クールビタミンコース</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                敏感な肌状態の方やエンビロントリートメントを始めて受けられる方に<br class="pc">おすすめのライトコースです。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7-1_img.jpg" alt=""></div>
              <ul class="menu_problem menu_problem_wide sp_w80 flex fw jc-cent tc mb30">
                <li><span class="">美肌</span></li>
                <li><span class="">肌荒れ<br class="">乾燥</span></li>
                <li><span class="">ニキビ<br class="">ニキビ跡</span></li>
                <li><span class="">赤みの改善</span></li>
                <li><span class="">毛穴の引締め</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_3-2 gosic">
                  <p class="mb20">
                    肌が敏感になっている方やエンビロントリートメントを始めて受けられる方にお勧めのコースです。その日のお肌にあった美容ジェルをお肌に塗布した状態でパルス型イオントフォレーシスを行います。さらに肌にピタッと密着するエンビロン独自のアルジネートマスクを同時にのせることで美容成分の浸透をより高めるだけでなく、お肌のクールダウンや保湿も同時に行えます。<br class="">ピーリング等の他コースとの併用もおすすめです。
                  </p>
                </div>
                <div class="pc col_3-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7-1_img.jpg" alt="">
                </div>
              </div>
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">クールビタミンコース 施術の流れ</h3>
                <ol class="flow_step">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">トーニング</span></li>
                  <li><span class="gosic">パルス型イオントフォレーシス＋アルジネートマスク</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>クールビタミンコース</td>
                      <td>¥8,800 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area7-1 END -->
          <div id="area7-2">
            <div class="bg_blue">
              <div class="inner">
                <h3 class="tc bold">エンビロンWビタミンコース</h3>
              </div><!-- inner END -->
            </div><!-- bg_blue END -->
            <div class="inner">
              <p class="txt_lead tc">
                しっかりと美容成分をお肌に届けたい方や、美肌を目指す方に定期的に受けて<br class="pc">いただきたいベーシックコースです。
              </p>
              <div class="sp sp_w80 mb30"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7-2_img.jpg" alt=""></div>
              <ul class="menu_problem menu_problem_wide sp_w80 flex fw jc-cent tc mb30">
                <li><span class="">美肌</span></li>
                <li><span class="">エイジング<br class="">ケア</span></li>
                <li><span class="">ニキビ<br class="">ニキビ跡</span></li>
                <li><span class="">しみ・美白</span></li>
                <li><span class="">毛穴の引締め</span></li>
              </ul>
              <div class="flex mb30">
                <div class="col_2-1 gosic">
                  <p class="mb20">
                    定期的に受けて頂きたいエンビロントリートメントのベーシックコースです。”低周波ソノフォレーシス(超音波導入)”と”パルス型イオントフォレーシス(イオン導入)が両方組み込まれており、美容成分をたっぷりとお肌に浸透させます。<br class="">アルジネートマスクも行いますので、毛穴の引き締まったもっちりとした艶肌に仕上がります。
                  </p>
                </div>
                <div class="pc col_2-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/area7-2_img.jpg" alt="">
                </div>
              </div>
              <div class="flow bg_gray_box mb30">
                <h3 class="tc">エンビロンWビタミンコース 施術の流れ</h3>
                <ol class="flow_step">
                  <li><span class="gosic">クレンジング・洗顔</span></li>
                  <li><span class="gosic">写真撮影</span></li>
                  <li><span class="gosic">トーニング</span></li>
                  <li><span class="gosic">低周波ソノフォレーシス</span></li>
                  <li><span class="gosic">パルス型イオントフォレーシス＋アルジネートマスク</span></li>
                  <li><span class="gosic">おしあげ</span></li>
                  <li><span class="gosic">終了</span></li>
                </ol>
              </div><!-- flow END -->
              <div class="price">
                <h3 class="tc">料金</h3>
                <table class="price_list gosic">
                  <tbody>
                    <tr class="flex">
                      <td>Wビタミンコース</td>
                      <td>¥13,200 (税込)</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- price END -->
            </div><!-- inner END -->
          </div><!-- area7-2 END -->
        </div><!-- inner_box END -->
      </div><!-- inner END -->
    </section><!-- area7 END -->
  </div><!-- medikaru END -->
</main>

<?php get_footer();?>

<?php else:  ?>
<?php echo get_the_password_form(); ?>
<?php endif;  ?>