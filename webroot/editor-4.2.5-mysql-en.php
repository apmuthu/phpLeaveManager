<?php
/** Adminer Editor - Compact database editor
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.5
*/error_reporting(6135);$Hb=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Hb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Ae=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Ae)$$V=$Ae;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuDÙ\0ŞvœëŒ†V\0èV`Gç½uµE®Ö•ÂÁf“l˜h’@ï)0@šT•°7‹íÛÂ§RAÊÙ·ò´3Û˜Ğ«/QÇ]ª,sÖ{VR±¡öF«¡A˜„<¨v×¥î´%@9‚ÀF¢Õ5t‰%Ö+º/¢8;¾WÑäÚÇJïĞo:ÖNÿ`ø	•ÿš´hìÁ{Ü£•î ËÔ8ÔEuª&°W|É†„‰®Uú&\r\"ÔÁ»‰|-uÇ†…Në¶:nc²©fV­‹ÂÃè#U20å>\"®²Ç>Ì`œk]î-¯ÇxùSØÍ‡Ğ¢©‰‚êcâ¡óB’—}Ø&`ˆîr+E­“\$œyNıŒ±b,†´´Wx ş-9åÕrÓ,’ü`å+œïíËŠù’CœÓ)˜˜7Ûx\r¬şWµfMŒSR¼\\èz¦ÙQ²Ì“”uA¬ºê2±õ4îL&ËHi Âµ°²¹S\$)e³“æg rÈŒ©ƒ\$]ZëiYs¤õ×kW–n>µ7E1k8ĞdÃró®škÁı¢ëEŞÙÛwÂwcmTy¹•ë¿a›\$tx\rB´÷=Šö¢*”<Èƒ l¡fôKœ‘N/¶¼	ÃlÕáükH“õ8 .‘‘ù?f÷›Úÿã6†Ñ‡¼{gi/\"à@–K›ñ@2ãça|#,Z¤±‡	³ñwˆd¬™“²…¼å6w™^&Áêt™çœP±…¥Äù]À¼›.àãÚí¡TìîkroÀ‰÷\ro=—%æ×h`:\0á±‚ö«”|êŠ£«a“Ô®6*:ÍÓ*‡ÊrO-^–’ñén«Íó§MÆ}æ»÷ÆAya±İ\nƒu^ì–ÀrnO\r±»¡`şT~</ğ¶wÄyş}æ:›|£ÏĞûÖÌ¡6»¤×ø®Ÿvî\rc<·b#ûàô§†î–\$ùsµê|ç‡‡V)«h‹TCùñ(Ä½ñ£È}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°Ï§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2İ´z=š0HøĞ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒŞo5šgòóIœÜ,2O4ãŞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ğhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ğ:ƒ€æáxï)…ĞüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpŞÎ“kÌ:)\\;° ĞÔğ\r@t…\$4O£<ş†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ğ-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmĞQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpŞÖ.[ëvŠtPZŞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ğ¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ğ6†Ã8¬FL«´×ŞíâŒB*¬ğ,Ò|\nx\\@ °@¸Ø3r ¬­ğÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,L²©º–öÅ%SÆ,ıv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ğê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'nÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ R©ğœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpı×:8\"Ğ´5¡«‰0î#*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäª}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±şÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦ş:Ê™yPãè—´ŠÀXÏ+¤’\nŞI;üş\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sğ™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)Äùé5•pí˜hù°ëéÃà¹\"0hL5\0˜7 æÚŒÚ‡Ÿ{ïÀİ¿¸İğî´<åk‚²\r+üXÅblåè/ØX ìAC¨s\na¤‘l÷Çí°}·~İ´— drx(\rè3ÎnGrÃTÄ+àQÏÁJ¹éï†PÌ\nØ'?À€Ä´n~º:· µòâQà8€»¦†`{ÙaÜÊ æ4:„ôLê:Ò öğ§›ÉÜuMó„®ßM¯IÁ…,†`ÍBgN€¯Âÿ\rBº•\r\0ûÂoé\"¼/‡2^D2)n¸\razR\$à7¢`ÍØ¹¨äèL³p®*Ò{`Oqt–z%%éHg§¹¦ 0¸…ÍKÃf&Ì)\\ĞQW¦öù‡†\0dp¾Ü<Q\"è„c”ÑÏ'ÿ/ÃQ7>¾+ù¿j#\0åîÈºĞ‘_ğÈôk3ëJº(óÜê%OêŒ£\0³Tm4³k:lÊ¤mD\$°¦¬×\0éê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãHjnæ¾5€ğNlŠÌşş‹šfj&›Mí•OüÓdbÓ°RÓğ´OdiiŞNĞ(¿%-4+Ğ:HpR¦§?BàM0š¶JF¢.ÚòÏ1Mö»f~U¬Tê°ŠÒlË 0…şËÀòUÅÂ|âÀĞ‚@òˆX4àbgè ]Pè?@z `…â<ğĞRîÔú`úí-¸şF˜ÎI\0Ñåşã¬¦|Ğ…ğ¸ê¸Å¬TkQk°F@0Lõì˜Pƒ\rÀšˆ#ÎuØÍËïàÜ²pXÿ^Ñ±ap\0\r y´Pt%\0^8ÆÒ\r¤Àµ‘Šk©£\0Ç¡1“\n¢dñ…â B± §.\níQjq\$\rMË¾F£ê®oî²êî(ï¸‰ [‘ .#>¦ğ¬Q„`Y`íMÑÊ,ÿJ†ñí\n<³‘uÑzÔ+I ÒÃ!)Üï+ØtñìÅŠ¼Åâºÿ¯lÆœm\"\"17\"jÀ0#N±m– ÂÙ¢æ–O pRÂK#ŒRÅç7#C´&ãÉ!2\$ÅÒ>†Ïœ”CŞ.R\"Ír‚ã\"PÈyË°7¨\rçÜ¼¤s)Õ%Ğ#‡U\rOÄEĞ€Ôøî«Æy”xCt@Ğ¿¨û*HàÇ é+@ÀàÈ0Õ\r’˜‡I‚¡ìL²¸²˜‚ˆ/ \\\rNR\r\0¨@+û\$Š©/*w0ËS\nt¢\"ä–\0ær‘/¬ÃPøÃğí\0ù3L¿°í%rïRÈ2R*º+÷0Ó\"¿-¾3N1âD7(tb’ê/@İ12º†M6â†¬dÈ(á“c7‹*–Épãl8²„å(t·0ÚKpÚ2Ù-ĞæÇğŞFbîƒ\$¼Røï(/ó+2îã,Ì²ËlºËï8¬Ïø–éróK!ç©6\"»Sa0bxÓà¾\$O\0\re‰ ¨\r\"8ˆ'‘ót³Œ\r³ù+£Pá@Y1°£Yb”Râ¹°Ú\\jK)÷438 hÌ1ó7 z`pğRR“CÒñBöîô<»Åöõ…”F	4çDtJ-¶tVå©D6\0NLåTå”v_â0ó‹\"qJ†ëIÅ•è*Ì.ô¾«àqÂR|´¯HÀÎ t]>ˆ\0€OL(#én.®2Bn9Jm‘@R s2|”Úh”ŞtãNn6B“cO+âšÒ†È e­¤ÊåĞËBO=,ÀÀC:Ô6ô:¸M<àä—BV\\`¦/BŒïÚ§Û,w:‘H°Í¸û2xpšM„nbn«¢Õ„‹0†ÎÕ	1Ö,4µV§#& lËâ×ÍjKCš\n‰gÍâl\rè¶IcY@ÏY‰h–3Û\nU’]@Î	 ÂÔ\rLÕdñ\\Bœ ú–\"t\r¯p'\nå‡'àO\\©ÆRĞ˜Ö³Ú5øáS†¤b%§[•¬\$‚LÕuó`5—Y®òÕu©[ÕÌÔ\0|EMh—µË\\)É\\u¶9¶bÉH.e@\r€à!Åe'µVPä¶C'c\"úf(RÅ‡&#~À–\\qHû]Ã{^Âğ¿ög'OÈ<vz‰6lpÕâg'8E–{ô*­/¹UÖVû‰¤ş­pì¶ıo,ï¸+´Ôş)X¯ëk.ÿ0`ÿsğÓ0h“r“°o^²œğ¦†°ŸB\"åjçOk-õ§%Æ0Æü“gÒxú+Ø Õ[àP7\"*hPP„\rc <ø[`æëV¢ â7å:`‹˜Uà°à(–I¢ƒs*dã¶;·>	—BGsG t:À‚8d\0@ÔjwLvj —ow7v b	¨püàæñÃu-ş\n€ , u:)âÕ\"ut…:îWB<S†b1ñò2éC×²S·¸d†%)rÀ÷pÕ¿{cpqMú!şà#P‘ì·#@ E}c\"@|d%kr£\"* xñí€ w}×´uWâ¦Âl&X~S‚B'uà@6ChÂº..ÚØ'Ø+@ÊêÓƒƒ[T÷¬1àßæşb\"Ğ\n\0\n`©I\0¸n+—/Æ\"lW1uÆ´—Z¦DøCâ(è€1Äp¶wĞ¼…®Ä À^\0ZJ`î¨b·#ãŒ5€É„«ˆH“ˆ¥;ˆäâ(à°¸Ì!`È¯#^Â»y…ß§ƒ…¨VGrß|Â_ïµpGåe‚QŒjd'2I-÷áÀh¤ ^Àda)×…:HØH)Ä5q·X‚¦FQ_·Û{8)~N~\"`™\$1øøå ”ùàñ³‚ßB_‚üàå€ ñÏN^¥h[˜Nø(”+‚ÃM„wÏ™P€'pŒ65b?ƒÑ´â†ù“y&<åZTãq,9Op¹@2M¾‰ØzÄ•Pq4`eo¥”é¤b\"fmvùX@…c9a0Çw Db ø~úˆ”‰ˆW\"u@·J‡rŠi8È0øè0—ü#³}7+€¶ok¾@³öœ\n)lÑr³Êı%vÚÜ‡Ë!¬®Õân{‚XYw*,Íìb™«‚F€^\r1Œy5šğBYùÕœ#w:3&jÙB©îÀàğ„fY`Ş“— ù§BI§š|l¨0òÇÓ«ãO£r[rEa0bÉ‹àÊ\n ¤	(€\r¹öGFª@Ø¼ÃúÙ­Àß® 1ÓÄĞ“S¢Âs+£X‡´%@u¨g9zfS†#0 ŞDBÍ _wÂé¯EÀÕ Bî>š{§ó÷*@Ğ}kã²÷È½à¸à\\P’,\"ª-rCÉrVäæY×·Z\rœ÷É[ùS}\0YŸ%kŸcÏ–2ıvs\rK¹îÈOÅT@èçs›Ê!Èü2ÑÒcwË’­ívÇºÔ,4&™rxrÒØ‡ì~€È#Ì\"¿€Xã\rÎ];SF²½Fî‡<ta/­ƒMé&ìU>ìÿ5s ¿ÀSÀçÿ>Æ6¿ì¬U{öåËp!\"yô7M’me÷Z„D!*vÅwæWê	‰û0Êw0ÇŒ1Š|H\$&Ô‰+{ÃìGRH!rÔ-ù24‘lµ¦\rĞå\r™\0ãŞÊt<Æ…Æ·fè:“DSÀdúeQóÑ\r\\¶aò°Ëç¹EôbGÏà„m äg¢x-T’¶ÅGÅYKÆ¢‡tp0®?¦Frx	ï2\\òVãÁ2;'\nÂ€‡Á+ù‰b1İÎDG–5´—¯l'(ó¥/[Å,N÷Á(nG8óÀb€XQ* àÁ-R¿–¢¹¤\n4q#[Uš<eƒÔÄ`æ&&Õoë@î›uÒ%â5\0¸ `\0‚E}#lÊ¨Uäx%m‡Y&P®bÍ•«.ëÏÏ¡Û1<jnÇÇƒÜ\nV~o´Nïp\n€Şã\$EÀ&Ô#íŞ%G\0²ş=¼ ekİÒ–QŠCÂ<}ö]ÔA½Ù-Yb;à¸†¥[İÚüş U¤YßcÇÏ~¿šT.\\Å<Wn\\oPÀÅüŞqÆ‰6P\nsàã`‘º„ü¦c:–3›([ÅÀzX¨ÙÙ{ Pì\\Èç‚«²€W®ãY¯:ß®:ıä#®¥½9´èYê¹[¹Yút&lç9kŞ±ŸY_Ò‰bÍ~¡¢&Õvã	ı*1şÍÅ`ÕfÌ8—·S§øV^ÛÜ'åâ¾î›}±»l³Ûz8üØÿÜæ ÂZGbÜÕ_àÓ]„â¢ÄfpJŠ€Z–0Ÿ¥@Vãÿ'õuö–yÆÌ	€ŞCñR'Nö…—?Yôå–Ök €è\$cöáÎ à=ì¿ní	äYJì>PíRì¢Jğ•×]µß.µäì§ƒçÙÚì»};;S­Ç]ãñ@ËÇè:Ââ“­÷I~Û‘•ÙùÒÁ|;¾£FyäÆƒåÀ}`ó/ßã-éí#ä1¥@yõ®7øïÜys}¿\$A¨a\\™<xGŞ•Ö¨BmamZxı3,}Ï:Ğ\nİd9¿‰Î‹ö} HŞĞmµT,/KêÎª (œæìShâ…:Âø°¼Vğ,Nµ\\ ïÀø\r€B%¸YŠvãi,•å€pyrrH”ó&ëdL%(ë@L¾Ğ5‚’T@1`Ù ¦:”Öî\nc‘,b×O,ìâŠ\"Ô£r(áf’YÓO-°¤ykËà*&ê‰,kä•yIP\n‘”£rpE%ËÌ`àó89Ì×…¥lëUN6_‘<EªåédL êK!Ÿ—ÄZbÕkñ*‚ºóq©¢‰C\$ÅÇP®¦ÍòäªsHnIÈMÙ(ˆ¯ƒq…ÄD@\"8÷¡\nƒâr–f—èC\rP€pKÆ£à®›Îd–L!Nˆ¸R9¨úcl…i½!a :ÂÒ\rÄ\rPSS—ã„*„…Ì0a ¦,–Ğ±d4Q\r3v†¹ì±LˆøÇÊ˜ÁÃ°Gn\"3ñ%QdŸµğ­‰)¯i4Ñu•sÁ­ÇˆXÁMP¬‚^«ä5¹O’¥	bépé xyèğÉTqDnBy®CàlĞq\0X“°2ŒE%	dF…‚,7G‹á±& µâRi¨„#ç€‰CV¨ÆNÀÚ\$¢LB!(<€„*1|H\"Eu<ÜãªP0T|sé¾)C(oZ[ÒµSœt»îıùú¢²m•\nnƒğ â•à6<ñ›/> ›â}Sğ­8=ã‚ÇÀàô/™)BÑvEIÊbœvğ’¬–/ˆªŠqìãÂôe¿KšÔw\0%õ!Í€pªUT@Ñµ‰Ë¦_ŒË˜@òàtË8î%ñ>âÌôA´—¤äb+~+\n’…Î¤Å\"©>4Áˆc^ÚôÖ¾Å¡è§N€ZÛ^ÖØ¯N4ªCDr–	DÉCÑ’øàáÈ³Ã¶(ÅR˜ed±‰ù¦›{áŠF•Z†+Q#´­ÈW-ıí‘¥qÉÑUCÆÎ;£œ‹XğÛx£¤„\n6ÍzkàvÚı´qàx\"h’ÄšRXş²?Àpd¢ùÅsğæ†?|ÜpÓ\rˆã¿~ÒÖ^Æ˜hÖªAñÆ<r\$ÓAfÇ5\n\"0;œƒ”‰!Ç¼Õ aÉá‰ÖzG„¬1ŞBÊ’ãÏ\"…¸†±­OLkÛÓ‡‘\0ƒFõñ¿'Yœˆ4õĞ˜");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress(compile_file('','minify_js'));}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($gc){$uc=substr($gc,-1);return
str_replace($uc.$uc,$uc,substr($gc,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
number($V){return
preg_replace('~[^0-9]+~','',$V);}function
remove_slashes($pd,$Hb=false){if(get_magic_quotes_gpc()){while(list($x,$V)=each($pd)){foreach($V
as$w=>$U){unset($pd[$x][$w]);if(is_array($U)){$pd[$x][stripslashes($w)]=$U;$pd[]=&$pd[$x][stripslashes($w)];}else$pd[$x][stripslashes($w)]=($Hb?$U:stripslashes($U));}}}}function
bracket_escape($gc,$ua=false){static$re=array(':'=>':1',']'=>':2','['=>':3');return
strtr($gc,($ua?array_flip($re):$re));}function
charset($f){return(version_compare($f->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$W,$Fa,$sc="",$Tc="",$Ia=""){$K="<input type='checkbox' name='$D' value='".h($W)."'".($Fa?" checked":"").($Tc?' onclick="'.h($Tc).'"':'').">";return($sc!=""||$Ia?"<label".($Ia?" class='$Ia'":"").">$K".h($sc)."</label>":$K);}function
optionlist($Xc,$Id=null,$Fe=false){$K="";foreach($Xc
as$w=>$U){$Yc=array($w=>$U);if(is_array($U)){$K.='<optgroup label="'.h($w).'">';$Yc=$U;}foreach($Yc
as$x=>$V)$K.='<option'.($Fe||is_string($x)?' value="'.h($x).'"':'').(($Fe||is_string($x)?(string)$x:$V)===$Id?' selected':'').'>'.h($V);if(is_array($U))$K.='</optgroup>';}return$K;}function
html_select($D,$Xc,$W="",$Sc=true){if($Sc)return"<select name='".h($D)."'".(is_string($Sc)?' onchange="'.h($Sc).'"':"").">".optionlist($Xc,$W)."</select>";$K="";foreach($Xc
as$x=>$V)$K.="<label><input type='radio' name='".h($D)."' value='".h($x)."'".($x==$W?" checked":"").">".h($V)."</label>";return$K;}function
select_input($c,$Xc,$W="",$hd=""){return($Xc?"<select$c><option value=''>$hd".optionlist($Xc,$W,true)."</select>":"<input$c size='10' value='".h($W)."' placeholder='$hd'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($r,$wc,$Je=false,$Tc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Tc)."return !toggle('fieldset-$r');\">$wc</a></legend><div id='fieldset-$r'".($Je?"":" class='hidden'").">\n";}function
bold($Aa,$Ia=""){return($Aa?" class='active $Ia'":($Ia?" class='$Ia'":""));}function
odd($K=' class="odd"'){static$q=0;if(!$K)$q=-1;return($q++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($x,$V=null){static$Ib=true;if($Ib)echo"{";if($x!=""){echo($Ib?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\/").'"':'undefined');$Ib=false;}else{echo"\n}\n";$Ib=true;}}function
ini_bool($kc){$V=ini_get($kc);return(preg_match('~^(on|true|yes)$~i',$V)||(int)$V);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
set_password($X,$O,$T,$G){$_SESSION["pwds"][$X][$O][$T]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}function
q($Q){global$f;return$f->quote($Q);}function
get_vals($I,$d=0){global$f;$K=array();$J=$f->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$d];}return$K;}function
get_key_vals($I,$g=null,$ke=0){global$f;if(!is_object($g))$g=$f;$K=array();$g->timeout=$ke;$J=$g->query($I);$g->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$g=null,$k="<p class='error'>"){global$f;$Sa=(is_object($g)?$g:$f);$K=array();$J=$Sa->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$K;}function
unique_array($L,$t){foreach($t
as$s){if(preg_match("~PRIMARY|UNIQUE~",$s["type"])){$K=array();foreach($s["columns"]as$x){if(!isset($L[$x]))continue
2;$K[$x]=$L[$x];}return$K;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$A))return$A[1].idf_escape(idf_unescape($A[2])).$A[3];return
idf_escape($x);}function
where($Y,$m=array()){global$f,$v;$K=array();foreach((array)$Y["where"]as$x=>$V){$x=bracket_escape($x,1);$d=escape_key($x);$K[]=$d.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$V))||$v=="mssql"?" LIKE ".q(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$x],q($V)));if($v=="sql"&&preg_match('~char|text~',$m[$x]["type"])&&preg_match("~[^ -@]~",$V))$K[]="$d = ".q($V)." COLLATE ".charset($f)."_bin";}foreach((array)$Y["null"]as$x)$K[]=escape_key($x)." IS NULL";return
implode(" AND ",$K);}function
where_check($V,$m=array()){parse_str($V,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$m);}function
where_link($q,$d,$W,$Vc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($d)."&where%5B$q%5D%5Bop%5D=".urlencode(($W!==null?$Vc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($W);}function
convert_fields($e,$m,$N=array()){$K="";foreach($e
as$x=>$V){if($N&&!in_array(idf_escape($x),$N))continue;$oa=convert_field($m[$x]);if($oa)$K.=", $oa AS ".idf_escape($x);}return$K;}function
cookie($D,$W,$zc=2592000){global$aa;$ed=array($D,(preg_match("~\n~",$W)?"":$W),($zc?time()+$zc:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ed[]=true;return
call_user_func_array('setcookie',$ed);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$V){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($X,$O,$T,$h=null){global$jb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($jb))."|username|".($h!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($X!="server"||$O!=""?urlencode($X)."=".urlencode($O)."&":"")."username=".urlencode($T).($h!=""?"&db=".urlencode($h):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$B=null){if($B!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$B;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($I,$_,$B,$xd=true,$zb=true,$Bb=false,$je=""){global$f,$k,$b;if($zb){$Td=microtime(true);$Bb=!$f->query($I);$je=format_time($Td);}$Sd="";if($I)$Sd=$b->messageQuery($I,$je);if($Bb){$k=error().$Sd;return
false;}if($xd)redirect($_,$B.$Sd);return
true;}function
queries($I){global$f;static$sd=array();static$Td;if(!$Td)$Td=microtime(true);if($I===null)return
array(implode("\n",$sd),format_time($Td));$sd[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I).";";return$f->query($I);}function
apply_queries($I,$ee,$wb='table'){foreach($ee
as$R){if(!queries("$I ".$wb($R)))return
false;}return
true;}function
queries_redirect($_,$B,$xd){list($sd,$je)=queries(null);return
query_redirect($sd,$_,$B,$xd,false,!$xd,$je);}function
format_time($Td){return
sprintf('%.3f s',max(0,microtime(true)-$Td));}function
remove_from_uri($dd=""){return
substr(preg_replace("~(?<=[?&])($dd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Ya){return" ".($F==$Ya?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($x,$bb=false){$Eb=$_FILES[$x];if(!$Eb)return
null;foreach($Eb
as$x=>$V)$Eb[$x]=(array)$V;$K='';foreach($Eb["error"]as$x=>$k){if($k)return$k;$D=$Eb["name"][$x];$pe=$Eb["tmp_name"][$x];$Ta=file_get_contents($bb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$pe":$pe);if($bb){$Td=substr($Ta,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Td,$yd))$Ta=iconv("utf-16","utf-8",$Ta);elseif($Td=="\xEF\xBB\xBF")$Ta=substr($Ta,3);$K.=$Ta."\n\n";}else$K.=$Ta;}return$K;}function
upload_error($k){$Ec=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($Ec?" ".sprintf('Maximum allowed file size is %sB.',$Ec):""):'File does not exist.');}function
repeat_pattern($H,$xc){return
str_repeat("$H{0,65535}",$xc/65535)."$H{0,".($xc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($Q,$xc=80,$Zd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xc).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xc).")($)?)",$Q,$A);return
h($A[1]).$Zd.(isset($A[2])?"":"<i>...</i>");}function
format_number($V){return
strtr(number_format($V,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($pd,$ic=array()){while(list($x,$V)=each($pd)){if(!in_array($x,$ic)){if(is_array($V)){foreach($V
as$w=>$U)$pd[$x."[$w]"]=$U;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($V).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Cb=false){$K=table_status($R,$Cb);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$Nb){foreach($Nb["source"]as$V)$K[$V][]=$Nb;}return$K;}function
enum_input($ue,$c,$l,$W,$sb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Bc);$K=($sb!==null?"<label><input type='$ue'$c value='$sb'".((is_array($W)?in_array($sb,$W):$W===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Bc[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Fa=(is_int($W)?$W==$q+1:(is_array($W)?in_array($q+1,$W):$W===$V));$K.=" <label><input type='$ue'$c value='".($q+1)."'".($Fa?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$K;}function
input($l,$W,$o){global$f,$we,$b,$v;$D=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($W)&&!$o){$na=array($W);if(version_compare(PHP_VERSION,5.4)>=0)$na[]=JSON_PRETTY_PRINT;$W=call_user_func_array('json_encode',$na);$o="json";}$Ad=($v=="mssql"&&$l["auto_increment"]);if($Ad&&!$_POST["save"])$o=null;$Tb=(isset($_GET["select"])||$Ad?array("orig"=>'original'):array())+$b->editFunctions($l);$c=" name='fields[$D]'";if($l["type"]=="enum")echo
nbsp($Tb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Ib=0;foreach($Tb
as$x=>$V){if($x===""||!$V)break;$Ib++;}$Sc=($Ib?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Ib > f.selectedIndex) f.selectedIndex = $Ib;\" onkeyup='keyupChange.call(this);'":"");$c.=$Sc;$Yb=(in_array($o,$Tb)||isset($Tb[$o]));echo(count($Tb)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Tb,$o===null||$Yb?$o:"")."</select>":nbsp(reset($Tb))).'<td>';$mc=$b->editInput($_GET["edit"],$l,$c,$W);if($mc!="")echo$mc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Bc);foreach($Bc[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Fa=(is_int($W)?($W>>$q)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$D][$q]' value='".(1<<$q)."'".($Fa?' checked':'')."$Sc>".h($b->editVal($V,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Sc>";elseif(($ge=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$W)){if($ge&&$v!="sqlite")$c.=" cols='50' rows='12'";else{$M=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}elseif($o=="json")echo"<textarea$c cols='50' rows='12' class='jush-js'>".h($W).'</textarea>';else{$Gc=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$A)?((preg_match("~binary~",$l["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$l["unsigned"]?1:0)):($we[$l["type"]]?$we[$l["type"]]+($l["unsigned"]?0:1):0));if($v=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Gc+=7;echo"<input".((!$Yb||$o==="")&&preg_match('~(?<!o)int~',$l["type"])?" type='number'":"")." value='".h($W)."'".($Gc?" maxlength='$Gc'":"").(preg_match('~char|binary~',$l["type"])&&$Gc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$gc=bracket_escape($l["field"]);$o=$_POST["function"][$gc];$W=$_POST["fields"][$gc];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if($o=="json"){$o="";$W=json_decode($W,true);if(!is_array($W))return
false;return$W;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$Eb=get_file("fields-$gc");if(!is_string($Eb))return
false;return
q($Eb);}return$b->processInput($l,$W,$o);}function
fields_from_edit(){global$i;$K=array();foreach((array)$_POST["field_keys"]as$x=>$V){if($V!=""){$V=bracket_escape($V);$_POST["function"][$V]=$_POST["field_funs"][$x];$_POST["fields"][$V]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$V){$D=bracket_escape($x,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$i->primary),);}return$K;}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Qb=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$f->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Qb){echo"<ul>\n";$Qb=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($Qb?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($fc,$Jc=false){global$b;$K=$b->dumpHeaders($fc,$Jc);$bd=$_POST["output"];if($bd!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($fc).".$K".($bd!="file"&&!preg_match('~[^0-9a-z]~',$bd)?".$bd":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$x=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$L[$x]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($o,$d){return($o?($o=="unixepoch"?"DATETIME($d, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$d)"):$d);}function
get_temp_dir(){$K=ini_get("upload_tmp_dir");if(!$K){if(function_exists('sys_get_temp_dir'))$K=sys_get_temp_dir();else{$Fb=@tempnam("","");if(!$Fb)return
false;$K=dirname($Fb);unlink($Fb);}}return$K;}function
password_file($Va){$Fb=get_temp_dir()."/adminer.key";$K=@file_get_contents($Fb);if($K||!$Va)return$K;$Rb=@fopen($Fb,"w");if($Rb){chmod($Fb,0660);$K=rand_string();fwrite($Rb,$K);fclose($Rb);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($V,$z,$l,$he){global$b,$aa;if(is_array($V)){$K="";foreach($V
as$w=>$U)$K.="<tr>".($V!=array_values($V)?"<th>".h($w):"")."<td>".select_value($U,$z,$l,$he);return"<table cellspacing='0'>$K</table>";}if(!$z)$z=$b->selectLink($V,$l);if($z===null){if(is_mail($V))$z="mailto:$V";if($qd=is_url($V))$z=(($qd=="http"&&$aa)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$V:"https://www.adminer.org/redirect/?url=".urlencode($V));}$K=$b->editVal($V,$l);if($K!==null){if($K==="")$K="&nbsp;";elseif(!is_utf8($K))$K="\0";elseif($he!=""&&is_shortable($l))$K=shorten_utf8($K,max(0,+$he));else$K=h($K);}return$b->selectVal($K,$z,$l,$V);}function
is_mail($pb){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$ib='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$pa+(\\.$pa+)*@($ib?\\.)+$ib";return
is_string($pb)&&preg_match("(^$H(,\\s*$H)*\$)i",$pb);}function
is_url($Q){$ib='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($ib?\\.)+$ib(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$l["type"]);}function
count_rows($R,$Y,$u,$p){global$v;$I=" FROM ".table($R).($Y?" WHERE ".implode(" AND ",$Y):"");return($u&&($v=="sql"||count($p)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$p).")$I":"SELECT COUNT(*)".($u?" FROM (SELECT 1$I$Ub) x":$I));}function
slow_query($I){global$b,$qe;$h=$b->database();$ke=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($h==""||$g->select_db($h))){$rc=$g->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$qe,'&kill=',$rc,'\');
}, ',1000*$ke,');
</script>
';}else$g=null;ob_flush();flush();$K=@get_key_vals($I,$g,$ke);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$vd=rand(1,1e6);return($vd^$_SESSION["token"]).":$vd";}function
verify_token(){list($qe,$vd)=explode(":",$_POST["token"]);return($vd^$_SESSION["token"])==$qe;}function
lzw_decompress($za){$gb=256;$_a=8;$Ka=array();$Bd=0;$Cd=0;for($q=0;$q<strlen($za);$q++){$Bd=($Bd<<8)+ord($za[$q]);$Cd+=8;if($Cd>=$_a){$Cd-=$_a;$Ka[]=$Bd>>$Cd;$Bd&=(1<<$Cd)-1;$gb++;if($gb>>$_a)$_a++;}}$fb=range("\0","\xFF");$K="";foreach($Ka
as$q=>$Ja){$ob=$fb[$Ja];if(!isset($ob))$ob=$Ne.$Ne[0];$K.=$ob;if($q)$fb[]=$Ne.$ob[0];$Ne=$ob;}return$K;}function
on_help($Pa,$Pd=0){return" onmouseover='helpMouseover(this, event, ".h($Pa).", $Pd);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$m,$L,$De){global$b,$v,$qe,$k;$de=$b->tableName(table_status1($a,true));page_header(($De?'Edit':'Insert'),$k,array("select"=>array($a,$de)),$de);if($L===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$D=>$l){echo"<tr><th>".$b->fieldName($l);$cb=$_GET["set"][bracket_escape($D)];if($cb===null){$cb=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$cb,$yd))$cb=$yd[1];}$W=($L!==null?($L[$D]!=""&&$v=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$De&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$cb)));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$D]:($De&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($De?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($De?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$qe,'">
</form>
';}global$b,$f,$jb,$mb,$ub,$k,$Tb,$Vb,$aa,$lc,$v,$ba,$tc,$Rc,$gd,$Wd,$Zb,$qe,$te,$we,$Ce,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$ed=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ed[]=true;call_user_func_array('session_set_cookie_params',$ed);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Hb);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($se,$Oc=null){if(is_array($se)){$jd=($Oc==1?0:1);$se=$se[$jd];}$se=str_replace("%d","%s",$se);$Oc=format_number($Oc);return
sprintf($se,$Oc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$jd=array_search("SQL",$b->operators);if($jd!==false)unset($b->operators[$jd]);}function
dsn($kb,$T,$G){try{parent::__construct($kb,$T,$G);}catch(Exception$xb){auth_error($xb->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$xe=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$jb=array();class
Min_SQL{var$_conn;function
__construct($f){$this->_conn=$f;}function
select($R,$N,$Y,$p,$E=array(),$y=1,$F=0,$nd=false){global$b,$v;$u=(count($p)<count($N));$I=$b->selectQueryBuild($N,$Y,$p,$E,$y,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$y&&$p&&$u&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Y?"\nWHERE ".implode(" AND ",$Y):"").($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):""),($y!=""?+$y:null),($F?$y*$F:0),"\n");$Td=microtime(true);$K=$this->_conn->query($I);if($nd)echo$b->selectQuery($I,format_time($Td));return$K;}function
delete($R,$td,$y=0){$I="FROM ".table($R);return
queries("DELETE".($y?limit1($I,$td):" $I$td"));}function
update($R,$P,$td,$y=0,$Kd="\n"){$Ge=array();foreach($P
as$x=>$V)$Ge[]="$x = $V";$I=table($R)." SET$Kd".implode(",$Kd",$Ge);return
queries("UPDATE".($y?limit1($I,$td):" $I$td"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$md){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$jb=array("server"=>"MySQL")+$jb;if(!defined("DRIVER")){$kd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$T="",$G="",$Za=null,$id=null,$Qd=null){mysqli_report(MYSQLI_REPORT_OFF);list($dc,$id)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$dc:ini_get("mysqli.default_host")),($O.$T!=""?$T:ini_get("mysqli.default_user")),($O.$T.$G!=""?$G:ini_get("mysqli.default_pw")),$Za,(is_numeric($id)?$id:ini_get("mysqli.default_port")),(!is_numeric($id)?$id:$Qd));return$K;}function
set_charset($Da){if(parent::set_charset($Da))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Da");}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$l];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$T,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$T"!=""?$T:ini_get("mysql.default_user")),("$O$T$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Da){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Da,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Da");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($Za){return
mysql_select_db($Za,$this->_link);}function
query($I,$xe=false){$J=@($xe?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$l=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$T,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$T,$G);return
true;}function
set_charset($Da){$this->query("SET NAMES $Da");}function
select_db($Za){return$this->query("USE ".idf_escape($Za));}function
query($I,$xe=false){$this->setAttribute(1000,!$xe);return
parent::query($I,$xe);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$md){$e=array_keys(reset($M));$ld="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$Ge=array();foreach($e
as$x)$Ge[$x]="$x = VALUES($x)";$Zd="\nON DUPLICATE KEY UPDATE ".implode(", ",$Ge);$Ge=array();$xc=0;foreach($M
as$P){$W="(".implode(", ",$P).")";if($Ge&&(strlen($ld)+$xc+strlen($W)+strlen($Zd)>1e6)){if(!queries($ld.implode(",\n",$Ge).$Zd))return
false;$Ge=array();$xc=0;}$Ge[]=$W;$xc+=strlen($W)+2;}return
queries($ld.implode(",\n",$Ge).$Zd);}}function
idf_escape($gc){return"`".str_replace("`","``",$gc)."`";}function
table($gc){return
idf_escape($gc);}function
connect(){global$b;$f=new
Min_DB;$Xa=$b->credentials();if($f->connect($Xa[0],$Xa[1],$Xa[2])){$f->set_charset(charset($f));$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$K=$f->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Ed=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Ed;return$K;}function
get_databases($Jb){global$f;$K=get_session("dbs");if($K===null){$I=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Jb?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Y,$y,$Pc=0,$Kd=" "){return" $I$Y".($y!==null?$Kd."LIMIT $y".($Pc?" OFFSET $Pc":""):"");}function
limit1($I,$Y){return
limit($I,$Y,1);}function
db_collation($h,$Na){global$f;$K=null;$Va=$f->result("SHOW CREATE DATABASE ".idf_escape($h),1);if(preg_match('~ COLLATE ([^ ]+)~',$Va,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Va,$A))$K=$Na[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals($f->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($ab){$K=array();foreach($ab
as$h)$K[$h]=count(get_vals("SHOW TABLES IN ".idf_escape($h)));return$K;}function
table_status($D="",$Cb=false){global$f;$K=array();foreach(get_rows($Cb&&$f->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$f;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($f->server_info,'5.6')>=0);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$g=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$g)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$f,$Rc;static$H='`(?:[^`]|``)+`';$K=array();$Wa=$f->result("SHOW CREATE TABLE ".table($R),1);if($Wa){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY ?\\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Rc))?(?: ON UPDATE ($Rc))?~",$Wa,$Bc,PREG_SET_ORDER);foreach($Bc
as$A){preg_match_all("~$H~",$A[2],$Rd);preg_match_all("~$H~",$A[5],$fe);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Rd[0]),"target"=>array_map('idf_unescape',$fe[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($D){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$x=>$V)asort($K[$x]);return$K;}function
information_schema($h){global$f;return($f->server_info>=5&&$h=="information_schema")||($f->server_info>=5.5&&$h=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
create_database($h,$Ma){return
queries("CREATE DATABASE ".idf_escape($h).($Ma?" COLLATE ".q($Ma):""));}function
drop_databases($ab){$K=apply_queries("DROP DATABASE",$ab,'idf_escape');restart_session();set_session("dbs",null);return$K;}function
rename_database($D,$Ma){$K=false;if(create_database($D,$Ma)){$zd=array();foreach(tables_list()as$R=>$ue)$zd[]=table($R)." TO ".idf_escape($D).".".table($R);$K=(!$zd||queries("RENAME TABLE ".implode(", ",$zd)));if($K)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$K;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ta="";break;}if($s["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($R,$D,$m,$Kb,$Qa,$tb,$Ma,$sa,$fd){$ma=array();foreach($m
as$l)$ma[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$ma=array_merge($ma,$Kb);$Ud=($Qa!==null?" COMMENT=".q($Qa):"").($tb?" ENGINE=".q($tb):"").($Ma?" COLLATE ".q($Ma):"").($sa!=""?" AUTO_INCREMENT=$sa":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$ma)."\n)$Ud$fd");if($R!=$D)$ma[]="RENAME TO ".table($D);if($Ud)$ma[]=ltrim($Ud);return($ma||$fd?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$ma).$fd):true);}function
alter_indexes($R,$ma){foreach($ma
as$x=>$V)$ma[$x]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"")."(".implode(", ",$V[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$ma));}function
truncate_tables($ee){return
apply_queries("TRUNCATE TABLE",$ee);}function
drop_views($Ie){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ie)));}function
drop_tables($ee){return
queries("DROP TABLE ".implode(", ",array_map('table',$ee)));}function
move_tables($ee,$Ie,$fe){$zd=array();foreach(array_merge($ee,$Ie)as$R)$zd[]=table($R)." TO ".idf_escape($fe).".".table($R);return
queries("RENAME TABLE ".implode(", ",$zd));}function
copy_tables($ee,$Ie,$fe){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ee
as$R){$D=($fe==DB?table("copy_$R"):idf_escape($fe).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Ie
as$R){$D=($fe==DB?table("copy_$R"):idf_escape($fe).".".table($R));$He=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $He[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$ue){global$f,$ub,$lc,$we;$la=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ve="((".implode("|",array_merge(array_keys($we),$la)).")\\b(?:\\s*\\(((?:[^'\")]|$ub)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$H="\\s*(".($ue=="FUNCTION"?"":$lc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ve";$Va=$f->result("SHOW CREATE $ue ".idf_escape($D),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($ue=="FUNCTION"?"RETURNS\\s+$ve\\s+":"")."(.*)~is",$Va,$A);$m=array();preg_match_all("~$H\\s*,?~is",$A[1],$Bc,PREG_SET_ORDER);foreach($Bc
as$dd){$D=str_replace("``","`",$dd[2]).$dd[3];$m[]=array("field"=>$D,"type"=>strtolower($dd[5]),"length"=>preg_replace_callback("~$ub~s",'normalize_enum',$dd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$dd[8] $dd[7]"))),"null"=>1,"full_type"=>$dd[4],"inout"=>strtoupper($dd[1]),"collation"=>strtolower($dd[9]),);}if($ue!="FUNCTION")return
array("fields"=>$m,"definition"=>$A[11]);return
array("fields"=>$m,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$I){return$f->query("EXPLAIN ".($f->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Y){return($Y||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Fd){return
true;}function
create_sql($R,$sa){global$f;$K=$f->result("SHOW CREATE TABLE ".table($R),1);if(!$sa)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Za){return"USE ".idf_escape($Za);}function
trigger_sql($R,$Xd){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Xd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$K){if(preg_match("~binary~",$l["type"]))$K="UNHEX($K)";if($l["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$K="GeomFromText($K)";return$K;}function
support($Db){global$f;return!preg_match("~scheme|sequence|type|view_trigger".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$Db);}function
kill_process($V){return
queries("KILL ".number($V));}function
max_connections(){global$f;return$f->result("SELECT @@max_connections");}$v="sql";$we=array();$Wd=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$V){$we+=$V;$Wd[$x]=array_keys($V);}$Ce=array("unsigned","zerofill","unsigned zerofill");$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Tb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$mb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.2.5";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='https://www.adminer.org/editor/' target='_blank' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($Va=false){return
password_file($Va);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){global$f;if($f){$ab=$this->databases(false);return(!$ab?$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ab[(information_schema($ab[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($Jb=true){return
get_databases($Jb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($_c,$G){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($ce){return
h($ce["Comment"]!=""?$ce["Comment"]:$ce["Name"]);}function
fieldName($l,$E=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($ce,$P=""){$a=$ce["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'New item'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$be){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$x=>$V){$D=$this->tableName(table_status($x,true));if($D!=""){$Gd=preg_quote($be);$Kd="(:|\\s*-)?\\s+";$K[$x]["name"]=(preg_match("(^$Gd$Kd(.+)|^(.+?)$Kd$Gd\$)iu",$D,$A)?$A[2].$A[3]:$D);}else
unset($K[$x]);}return$K;}function
backwardKeysPrint($wa,$L){foreach($wa
as$R=>$va){foreach($va["keys"]as$Oa){$z=ME.'select='.urlencode($R);$q=0;foreach($Oa
as$d=>$V)$z.=where_link($q++,$d,$L[$V]);echo"<a href='".h($z)."'>".h($va["name"])."</a>";$z=ME.'edit='.urlencode($R);foreach($Oa
as$d=>$V)$z.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($L[$V]);echo"<a href='".h($z)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($I,$je){return"<!--\n".str_replace("--","--><!-- ",$I)."\n($je)\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(preg_match("~varchar|character varying~",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($M,$Mb){$K=$M;foreach($M[0]as$x=>$V){if(list($R,$r,$D)=$this->_foreignColumn($Mb,$x)){$hc=array();foreach($M
as$L)$hc[$L[$x]]=q($L[$x]);$eb=$this->_values[$R];if(!$eb)$eb=get_key_vals("SELECT $r, $D FROM ".table($R)." WHERE $r IN (".implode(", ",$hc).")");foreach($M
as$C=>$L){if(isset($L[$x]))$K[$C][$x]=(string)$eb[$L[$x]];}}}return$K;}function
selectLink($V,$l){}function
selectVal($V,$z,$l,$ad){$K=($V===null?"&nbsp;":$V);$z=h($z);if(preg_match('~blob|bytea~',$l["type"])&&!is_utf8($V)){$K=lang(array('%d byte','%d bytes'),strlen($ad));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$ad))$K="<img src='$z' alt='$K'>";}if(like_bool($l)&&$K!="&nbsp;")$K=($V?'yes':'no');if($z)$K="<a href='$z'".(is_url($z)?" rel='noreferrer'":"").">$K</a>";if(!$z&&!like_bool($l)&&preg_match('~int|float|double|decimal~',$l["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$l["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($V,$l){if(preg_match('~date|timestamp~',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$V);return$V;}function
selectColumnsPrint($N,$e){}function
selectSearchPrint($Y,$e,$t){$Y=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$qc=array();foreach($Y
as$x=>$V)$qc[$V["col"]]=$x;$q=0;$m=fields($_GET["select"]);foreach($e
as$D=>$db){$l=$m[$D];if(preg_match("~enum~",$l["type"])||like_bool($l)){$x=$qc[$D];$q--;echo"<div>".h($db)."<input type='hidden' name='where[$q][col]' value='".h($D)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'no','yes'),$Y[$x]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$Y[$x]["val"],($l["null"]?0:null))),"</div>\n";unset($e[$D]);}elseif(is_array($Xc=$this->_foreignKeyOptions($_GET["select"],$D))){if($m[$D]["null"])$Xc[0]='('.'empty'.')';$x=$qc[$D];$q--;echo"<div>".h($db)."<input type='hidden' name='where[$q][col]' value='".h($D)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Xc,$Y[$x]["val"],true)."</select></div>\n";unset($e[$D]);}}$q=0;foreach($Y
as$V){if(($V["col"]==""||$e[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'anywhere'.")".optionlist($e,$V["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$q][val]' value='".h($V["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($e,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$e,$t){$Zc=array();foreach($t
as$x=>$s){$E=array();foreach($s["columns"]as$V)$E[]=$e[$V];if(count(array_filter($E,'strlen'))>1&&$x!="PRIMARY")$Zc[$x]=implode(", ",$E);}if($Zc){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Zc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$y),"</div></fieldset>\n";}function
selectLengthPrint($he){}function
selectActionPrint($t){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($qb,$e){if($qb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($qb)==1?'<input type="hidden" name="email_field" value="'.h(key($qb)).'">':html_select("email_field",$qb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$K=array();foreach((array)$_GET["where"]as$x=>$Y){$La=$Y["col"];$Uc=$Y["op"];$V=$Y["val"];if(($x<0?"":$La).$V!=""){$Ra=array();foreach(($La!=""?array($La=>$m[$La]):$m)as$D=>$l){if($La!=""||is_numeric($V)||!preg_match('~int|float|double|decimal~',$l["type"])){$D=idf_escape($D);if($La!=""&&$l["type"]=="enum")$Ra[]=(in_array(0,$V)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$V)).")";else{$ie=preg_match('~char|text|enum|set~',$l["type"]);$W=$this->processInput($l,(!$Uc&&$ie&&preg_match('~^[^%]+$~',$V)?"%$V%":$V));$Ra[]=$D.($W=="NULL"?" IS".($Uc==">="?" NOT":"")." $W":(in_array($Uc,$this->operators)||$Uc=="="?" $Uc $W":($ie?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($x<0&&$V=="0")$Ra[]="$D IS NULL";}}}$K[]=($Ra?"(".implode(" OR ",$Ra).")":"0");}}return$K;}function
selectOrderProcess($m,$t){$jc=$_GET["index_order"];if($jc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($jc!=""?array($t[$jc]):$t)as$s){if($jc!=""||$s["type"]=="INDEX"){$Xb=array_filter($s["descs"]);$db=false;foreach($s["columns"]as$V){if(preg_match('~date|timestamp~',$m[$V]["type"])){$db=true;break;}}$K=array();foreach($s["columns"]as$x=>$V)$K[]=idf_escape($V).(($Xb?$s["descs"][$x]:$db)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Y,$Mb){if($_POST["email_append"])return
true;if($_POST["email"]){$Jd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Yd=$_POST["email_subject"];$B=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Yd.$B",$Bc);$M=get_rows("SELECT DISTINCT $l".($Bc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Bc[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($Y?" AND ".implode(" AND ",$Y):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Mb)as$L){$_d=array('{\\'=>'{');foreach($Bc[1]as$V)$_d['{$'."$V}"]=$this->editVal($L[$V],$m[$V]);$pb=$L[$_POST["email_field"]];if(is_mail($pb)&&send_mail($pb,strtr($Yd,$_d),strtr($B,$_d),$_POST["email_from"],$_FILES["email_files"]))$Jd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$Jd));}return
false;}function
selectQueryBuild($N,$Y,$p,$E,$y,$F){return"";}function
messageQuery($I,$je){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n".($je?"($je)\n":"")."-->";}function
editFunctions($l){$K=array();if($l["null"]&&preg_match('~blob~',$l["type"]))$K["NULL"]='empty';$K[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(preg_match('~date|time~',$l["type"]))$K["now"]='now';if(preg_match('~_(md5|sha1)$~i',$l["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Xc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Xc!==null)return(is_array($Xc)?"<select$c>".optionlist($Xc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Xc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$cc="";if(preg_match('~time~',$l["type"]))$cc='HH:MM:SS';if(preg_match('~date|timestamp~',$l["type"]))$cc='[yyyy]-mm-dd'.($cc?" [$cc]":"");if($cc)return"<input value='".h($W)."'$c> ($cc)";if(preg_match('~_(md5|sha1)$~i',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$K=$W;if(preg_match('~date|timestamp~',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$W,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($l["type"]=="bit"&&preg_match('~^[0-9]+$~',$W)?$K:q($K));if($W==""&&like_bool($l))$K="0";elseif($W==""&&($l["null"]||!preg_match('~char|text~',$l["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$o))$K="$o($K)";return
unconvert_field($l,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($h){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Xd,$I){global$f;$J=$f->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Xd=="table"){dump_csv(array_keys($L));$Xd="INSERT";}dump_csv($L);}}}function
dumpFilename($fc){return
friendly_url($fc);}function
dumpHeaders($fc,$Jc=false){$_b="csv";header("Content-Type: text/csv; charset=utf-8");return$_b;}function
homepage(){return
true;}function
navigation($Ic){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="https://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ic=="auth"){$Ib=true;foreach((array)$_SESSION["pwds"]as$X=>$Nd){foreach($Nd[""]as$T=>$G){if($G!==null){if($Ib){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Ib=false;}echo"<a href='".h(auth_url($X,"",$T))."'>".($T!=""?h($T):"<i>".'empty'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Ic);if($Ic!="db"&&$Ic!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Ic){}function
tablesPrint($ee){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($ee
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"],"select")." title='".'Select data'."'>$D</a><br>\n";}}function
_foreignColumn($Mb,$d){foreach((array)$Mb[$d]as$Lb){if(count($Lb["source"])==1){$D=$this->rowDescription($Lb["table"]);if($D!=""){$r=idf_escape($Lb["target"][0]);return
array($Lb["table"],$r,$D);}}}}function
_foreignKeyOptions($R,$d,$W=null){global$f;if(list($fe,$r,$D)=$this->_foreignColumn(column_foreign_keys($R),$d)){$K=&$this->_values[$fe];if($K===null){$S=table_status($fe);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $D FROM ".table($fe)." ORDER BY 2"));}if(!$K&&$W!==null)return$f->result("SELECT $D FROM ".table($fe)." WHERE $r = ".q($W));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($le,$k="",$Ca=array(),$me=""){global$ba,$ca,$b,$jb,$v;page_headers();if(is_ajax()&&$k){page_messages($k);exit;}$ne=$le.($me!=""?": $me":"");$oe=strip_tags($ne.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$oe,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.5&amp;driver=mysql",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.5&amp;driver=mysql",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.5&amp;driver=mysql",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.5&amp;driver=mysql",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ca');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ca!==null){$z=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$jb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($Ca===false)echo"$O\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$x=>$V){$db=(is_array($V)?$V[1]:h($V));if($db!="")echo"<a href='".h(ME."$x=").urlencode(is_array($V)?$V[0]:$V)."'>$db</a> &raquo; ";}}echo"$le\n";}}echo"<h2>$ne</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($k);$ab=&get_session("dbs");if(DB!=""&&$ab&&!in_array(DB,$ab,true))$ab=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$Ee=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Hc=$_SESSION["messages"][$Ee];if($Hc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Hc)."</div>\n";unset($_SESSION["messages"][$Ee]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($Ic=""){global$b,$qe;echo'</div>

';if($Ic!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$qe,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Ic);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($U,$Ke){$Ed='';foreach($U
as$V)$Ed.=pack('V',$V);if($Ke)return
substr($Ed,0,end($U));return$Ed;}function
str2long($Ed,$Ke){$U=array_values(unpack('V*',str_pad($Ed,4*ceil(strlen($Ed)/4),"\0")));if($Ke)$U[]=strlen($Ed);return$U;}function
xxtea_mx($Z,$Oe,$ae,$w){return
int32((($Z>>5&0x7FFFFFF)^$Oe<<2)+(($Oe>>3&0x1FFFFFFF)^$Z<<4))^int32(($ae^$Oe)+($w^$Z));}function
encrypt_string($Vd,$x){if($Vd=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$U=str2long($Vd,true);$C=count($U)-1;$Z=$U[$C];$Oe=$U[0];$rd=floor(6+52/($C+1));$ae=0;while($rd-->0){$ae=int32($ae+0x9E3779B9);$lb=$ae>>2&3;for($cd=0;$cd<$C;$cd++){$Oe=$U[$cd+1];$Kc=xxtea_mx($Z,$Oe,$ae,$x[$cd&3^$lb]);$Z=int32($U[$cd]+$Kc);$U[$cd]=$Z;}$Oe=$U[0];$Kc=xxtea_mx($Z,$Oe,$ae,$x[$cd&3^$lb]);$Z=int32($U[$C]+$Kc);$U[$C]=$Z;}return
long2str($U,false);}function
decrypt_string($Vd,$x){if($Vd=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$U=str2long($Vd,false);$C=count($U)-1;$Z=$U[$C];$Oe=$U[0];$rd=floor(6+52/($C+1));$ae=int32($rd*0x9E3779B9);while($ae){$lb=$ae>>2&3;for($cd=$C;$cd>0;$cd--){$Z=$U[$cd-1];$Kc=xxtea_mx($Z,$Oe,$ae,$x[$cd&3^$lb]);$Oe=int32($U[$cd]-$Kc);$U[$cd]=$Oe;}$Z=$U[$C];$Kc=xxtea_mx($Z,$Oe,$ae,$x[$cd&3^$lb]);$Oe=int32($U[0]-$Kc);$U[0]=$Oe;$ae=int32($ae-0x9E3779B9);}return
long2str($U,true);}$f='';$Zb=$_SESSION["token"];if(!$Zb)$_SESSION["token"]=rand(1,1e6);$qe=get_token();$gd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($x)=explode(":",$V);$gd[$x]=$V;}}function
add_invalid_login(){global$b;$Fb=get_temp_dir()."/adminer.invalid";$Rb=@fopen($Fb,"r+");if(!$Rb){$Rb=@fopen($Fb,"w");if(!$Rb)return;}flock($Rb,LOCK_EX);$oc=unserialize(stream_get_contents($Rb));$je=time();if($oc){foreach($oc
as$pc=>$V){if($V[0]<$je)unset($oc[$pc]);}}$nc=&$oc[$b->bruteForceKey()];if(!$nc)$nc=array($je+30*60,0);$nc[1]++;$Ld=serialize($oc);rewind($Rb);fwrite($Rb,$Ld);ftruncate($Rb,strlen($Ld));flock($Rb,LOCK_UN);fclose($Rb);}$ra=$_POST["auth"];if($ra){$oc=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$nc=$oc[$b->bruteForceKey()];$Mc=($nc[1]>30?$nc[0]-time():0);if($Mc>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($Mc/60)));session_regenerate_id();$X=$ra["driver"];$O=$ra["server"];$T=$ra["username"];$G=(string)$ra["password"];$h=$ra["db"];set_password($X,$O,$T,$G);$_SESSION["db"][$X][$O][$T][$h]=true;if($ra["permanent"]){$x=base64_encode($X)."-".base64_encode($O)."-".base64_encode($T)."-".base64_encode($h);$od=$b->permanentLogin(true);$gd[$x]="$x:".base64_encode($od?encrypt_string($G,$od):"");cookie("adminer_permanent",implode(" ",$gd));}if(count($_POST)==1||DRIVER!=$X||SERVER!=$O||$_GET["username"]!==$T||DB!=$h)redirect(auth_url($X,$O,$T,$h));}elseif($_POST["logout"]){if($Zb&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($gd&&!$_SESSION["pwds"]){session_regenerate_id();$od=$b->permanentLogin();foreach($gd
as$x=>$V){list(,$Ha)=explode(":",$V);list($X,$O,$T,$h)=array_map('base64_decode',explode("-",$x));set_password($X,$O,$T,decrypt_string(base64_decode($Ha),$od));$_SESSION["db"][$X][$O][$T][$h]=true;}}function
unset_permanent(){global$gd;foreach($gd
as$x=>$V){list($X,$O,$T,$h)=array_map('base64_decode',explode("-",$x));if($X==DRIVER&&$O==SERVER&&$T==$_GET["username"]&&$h==DB)unset($gd[$x]);}cookie("adminer_permanent",implode(" ",$gd));}function
auth_error($k){global$b,$Zb;$k=h($k);$Od=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Od]||$_GET[$Od])&&!$Zb)$k='Session expired, please login again.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$k.='<br>'.sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Od]&&$_GET[$Od]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';$ed=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$ed["lifetime"]);page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$kd)),false);page_footer("auth");exit;}$f=connect();}$i=new
Min_Driver($f);if(!is_object($f)||($_c=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($f)?$f:(is_string($_c)?$_c:'Invalid credentials.')));if($ra&&$_POST["token"])$_POST["token"]=$qe;$k='';if($_POST){if(!verify_token()){$kc="max_input_vars";$Fc=ini_get($kc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$V=ini_get($x);if($V&&(!$Fc||$V<$Fc)){$kc=$x;$Fc=$V;}}}$k=(!$_POST["token"]&&$Fc?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$kc'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
email_header($ac){return"=?UTF-8?B?".base64_encode($ac)."?=";}function
send_mail($pb,$Yd,$B,$Sb="",$Gb=array()){$j=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$B=str_replace("\n",$j,wordwrap(str_replace("\r","","$B\n")));$Ba=uniqid("boundary");$qa="";foreach((array)$Gb["error"]as$x=>$V){if(!$V)$qa.="--$Ba$j"."Content-Type: ".str_replace("\n","",$Gb["type"][$x]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Gb["name"][$x])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Gb["tmp_name"][$x])),76,$j).$j;}$ya="";$bc="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$Ba--$j";$ya="--$Ba$j$bc$j$j";$bc="Content-Type: multipart/mixed; boundary=\"$Ba\"";}$bc.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Sb?$j."From: ".str_replace("\n","",$Sb):"");return
mail($pb,email_header($Yd),$ya.$B.$qa,$bc);}function
like_bool($l){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$l["full_type"]);}$f->select_db($b->database());$Rc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$jb[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$i->select($a,$N,array(where($_GET,$m)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$Y=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$De=(isset($_GET["select"])?$_POST["edit"]:$Y);foreach($m
as$D=>$l){if(!isset($l["privileges"][$De?"update":"insert"])||$b->fieldName($l)=="")unset($m[$D]);}if($_POST&&!$k&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($De?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$_))$_=ME."select=".urlencode($a);$t=indexes($a);$ze=unique_array($_GET["where"],$t);$ud="\nWHERE $Y";if(isset($_POST["delete"]))queries_redirect($_,'Item has been deleted.',$i->delete($a,$ud,!$ze));else{$P=array();foreach($m
as$D=>$l){$V=process_input($l);if($V!==false&&$V!==null)$P[idf_escape($D)]=$V;}if($De){if(!$P)redirect($_);queries_redirect($_,'Item has been updated.',$i->update($a,$P,$ud,!$ze));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$J=$i->insert($a,$P);$vc=($J?last_id():0);queries_redirect($_,sprintf('Item%s has been inserted.',($vc?" $vc":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Y){$N=array();foreach($m
as$D=>$l){if(isset($l["privileges"]["select"])){$oa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$oa="''";if($v=="sql"&&preg_match("~enum|set~",$l["type"]))$oa="1*".idf_escape($D);$N[]=($oa?"$oa AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$i->select($a,$N,array($Y),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$m){if(!$Y){$J=$i->select($a,array("*"),$Y,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($i->primary=>"");}if($L){foreach($L
as$x=>$V){if(!$Y)$L[$x]=null;$m[$x]=array("field"=>$x,"null"=>($x!=$i->primary),"auto_increment"=>($x==$i->primary));}}}edit_form($a,$m,$L,$De);}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$t=indexes($a);$m=fields($a);$Ob=column_foreign_keys($a);$Qc="";if($S["Oid"]){$Qc=($v=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Qc));}parse_str($_COOKIE["adminer_import"],$ia);$Dd=array();$e=array();$he=null;foreach($m
as$x=>$l){$D=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$D!=""){$e[$x]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($l))$he=$b->selectLengthProcess();}$Dd+=$l["privileges"];}list($N,$p)=$b->selectColumnsProcess($e,$t);$u=count($p)<count($N);$Y=$b->selectSearchProcess($m,$t);$E=$b->selectOrderProcess($m,$t);$y=$b->selectLimitProcess();$Sb=($N?implode(", ",$N):"*".($Qc?", $Qc":"")).convert_fields($e,$m,$N)."\nFROM ".table($a);$Ub=($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$_e=>$L){$oa=convert_field($m[key($L)]);$N=array($oa?$oa:idf_escape(key($L)));$Y[]=where_check($_e,$m);$K=$i->select($a,$N,$Y,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$k){$Me=$Y;if(!$_POST["all"]&&is_array($_POST["check"])){$Ga=array();foreach($_POST["check"]as$Ea)$Ga[]=where_check($Ea,$m);$Me[]="((".implode(") OR (",$Ga)."))";}$Me=($Me?"\nWHERE ".implode(" AND ",$Me):"");$md=$Be=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$md=array_flip($s["columns"]);$Be=($N?$md:array());break;}}foreach((array)$Be
as$x=>$V){if(in_array(idf_escape($x),$N))unset($Be[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Be===array())$I="SELECT $Sb$Me$Ub";else{$ye=array();foreach($_POST["check"]as$V)$ye[]="(SELECT".limit($Sb,"\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($V,$m).$Ub,1).")";$I=implode(" UNION ALL ",$ye);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Y,$Ob)){if($_POST["save"]||$_POST["delete"]){$J=true;$ja=0;$P=array();if(!$_POST["delete"]){foreach($e
as$D=>$V){$V=process_input($m[$D]);if($V!==null&&($_POST["clone"]||$V!==false))$P[idf_escape($D)]=($V!==false?$V:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Be===array()&&is_array($_POST["check"]))||$u){$J=($_POST["delete"]?$i->delete($a,$Me):($_POST["clone"]?queries("INSERT $I$Me"):$i->update($a,$P,$Me)));$ja=$f->affected_rows;}else{foreach((array)$_POST["check"]as$V){$Le="\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($V,$m);$J=($_POST["delete"]?$i->delete($a,$Le,1):($_POST["clone"]?queries("INSERT".limit1($I,$Le)):$i->update($a,$P,$Le)));if(!$J)break;$ja+=$f->affected_rows;}}}$B=lang(array('%d item has been affected.','%d items have been affected.'),$ja);if($_POST["clone"]&&$J&&$ja==1){$vc=last_id();if($vc)$B=sprintf('Item%s has been inserted.'," $vc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$B,$J);if(!$_POST["delete"]){edit_form($a,$m,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+click on a value to modify it.';else{$J=true;$ja=0;foreach($_POST["val"]as$_e=>$L){$P=array();foreach($L
as$x=>$V){$x=bracket_escape($x,1);$P[idf_escape($x)]=(preg_match('~char|text~',$m[$x]["type"])||$V!=""?$b->processInput($m[$x],$V):"NULL");}$J=$i->update($a,$P," WHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($_e,$m),!($u||$Be===array())," ");if(!$J)break;$ja+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ja),$J);}}elseif(!is_string($Eb=get_file("csv_file",true)))$k=upload_error($Eb);elseif(!preg_match('~~u',$Eb))$k='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ia["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Oa=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Eb,$Bc);$ja=count($Bc[0]);$i->begin();$Kd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($Bc[0]as$x=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$Kd]*)$Kd~",$V.$Kd,$Cc);if(!$x&&!array_diff($Cc[1],$Oa)){$Oa=$Cc[1];$ja--;}else{$P=array();foreach($Cc[1]as$q=>$La)$P[idf_escape($Oa[$q])]=($La==""&&$m[$Oa[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$La))));$M[]=$P;}}$J=(!$M||$i->insertUpdate($a,$M,$md));if($J)$i->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ja),$J);$i->rollback();}}}$de=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $de",$k);$P=null;if(isset($Dd["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$V){if(count($Ob[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!preg_match('~[_%]~',$V["val"]))))$P.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$P);if(!$e&&support("table"))echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$e);$b->selectSearchPrint($Y,$e,$t);$b->selectOrderPrint($E,$e,$t);$b->selectLimitPrint($y);$b->selectLengthPrint($he);$b->selectActionPrint($t);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$n=$f->result(count_rows($a,$Y,$u,$p));$F=floor(max(0,$n-1)/$y);}$Hd=$N;if(!$Hd){$Hd[]="*";if($Qc)$Hd[]=$Qc;}$Ua=convert_fields($e,$m,$N);if($Ua)$Hd[]=substr($Ua,2);$J=$i->select($a,$Hd,$Y,$p,$E,$y,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$F)$J->seek($y*$F);$rb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$v=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$y&&$p&&$u&&$v=="sql")$n=$f->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".'No rows.'."\n";else{$xa=$b->backwardKeys($a,$de);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$p&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Lc=array();$Tb=array();reset($N);$wd=1;foreach($M[0]as$x=>$V){if($x!=$Qc){$V=$_GET["columns"][key($N)];$l=$m[$N?($V?$V["col"]:current($N)):$x];$D=($l?$b->fieldName($l,$wd):($V["fun"]?"*":$x));if($D!=""){$wd++;$Lc[$x]=$D;$d=idf_escape($x);$ec=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$db="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ec.($E[0]==$d||$E[0]==$x||(!$E&&$u&&$p[0]==$d)?$db:'')).'">';echo
apply_sql_function($V["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($ec.$db)."' title='".'descending'."' class='text'> â†“</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Tb[$x]=$V["fun"];next($N);}}$yc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$x=>$V)$yc[$x]=max($yc[$x],min(40,strlen(utf8_decode($V))));}}echo($xa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($y%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Ob)as$C=>$L){$ze=unique_array($M[$C],$t);if(!$ze){$ze=array();foreach($M[$C]as$x=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$ze[$x]=$V;}}$_e="";foreach($ze
as$x=>$V){if(($v=="sql"||$v=="pgsql")&&strlen($V)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($v=='sql'&&preg_match("~^utf8_~",$m[$x]["collation"])?$x:"CONVERT($x USING ".charset($f).")").")";$V=md5($V);}$_e.="&".($V!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($V):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$p&&$N?"":"<td>".checkbox("check[]",substr($_e,1),in_array(substr($_e,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($u||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$_e)."'>".'edit'."</a>"));foreach($L
as$x=>$V){if(isset($Lc[$x])){$l=$m[$x];if($V!=""&&(!isset($rb[$x])||$rb[$x]!=""))$rb[$x]=(is_mail($V)?$Lc[$x]:"");$z="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$V!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($x).$_e;if(!$z&&$V!==null){foreach((array)$Ob[$x]as$Nb){if(count($Ob[$x])==1||end($Nb["source"])==$x){$z="";foreach($Nb["source"]as$q=>$Rd)$z.=where_link($q,$Nb["target"][$q],$M[$C][$Rd]);$z=($Nb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Nb["db"]),ME):ME).'select='.urlencode($Nb["table"]).$z;if(count($Nb["source"])==1)break;}}}if($x=="COUNT(*)"){$z=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$ze))$z.=where_link($q++,$U["col"],$U["val"],$U["op"]);}foreach($ze
as$w=>$U)$z.=where_link($q++,$w,$U);}$V=select_value($V,$z,$l,$he);$r=h("val[$_e][".bracket_escape($x)."]");$W=$_POST["val"][$_e][bracket_escape($x)];$nb=!is_array($L[$x])&&is_utf8($V)&&$M[$C][$x]==$L[$x]&&!$Tb[$x];$ge=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$nb)||$W!==null){$Wb=h($W!==null?$W:$L[$x]);echo"<td>".($ge?"<textarea name='$r' cols='30' rows='".(substr_count($L[$x],"\n")+1)."'>$Wb</textarea>":"<input name='$r' value='$Wb' size='$yc[$x]'>");}else{$Ac=strpos($V,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($Ac?2:($ge?1:0)).($nb?"":", '".h('Use edit link to modify this value.')."'").");\">$V";}}}if($xa)echo"<td>";$b->backwardKeysPrint($xa,$M[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$yb=true;if($_GET["page"]!="last"){if(!+$y)$n=count($M);elseif($v!="sql"||!$u){$n=($u?false:found_rows($S,$Y));if($n<max(1e4,2*($F+1)*$y))$n=reset(slow_query(count_rows($a,$Y,$u,$p)));else$yb=false;}}if(+$y&&($n===false||$n>$y||$F)){echo"<p class='pages'>";$Dc=($n===false?$F+(count($M)>=$y?2:1):floor(($n-1)/$y));if($v!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($F+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$F).($F>5?" ...":"");for($q=max(1,$F-4);$q<min($Dc,$F+5);$q++)echo
pagination($q,$F);if($Dc>0){echo($F+5<$Dc?" ...":""),($yb&&$n!==false?pagination($Dc,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Dc'>".'last'."</a>");}echo(($n===false?count($M)+1:$n-$F*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.'Loading'.'...\');" class="loadmore">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($Dc>$F?pagination($F+1,$F).($Dc>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($n!==false?"(".($yb?"":"~ ").lang(array('%d row','%d rows'),$n).") ":"");$hb=($yb?"":"~ ").$n;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$hb' : checked); selectCount('selected2', this.checked || !checked ? '$hb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Pb=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Pb['sql']);break;}}if($Pb){print_fieldset("export",'Export'." <span id='selected2'></span>");$bd=$b->dumpOutput();echo($bd?html_select("output",$bd,$ia["output"])." ":""),html_select("format",$Pb,$ia["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$p&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ia["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($rb,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$qe'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$f->query("KILL ".number($_POST["kill"]));elseif(list($R,$r,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$y=11;$J=$f->query("SELECT $r, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$r = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $y");for($q=1;($L=$J->fetch_row())&&$q<$y;$q++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$V=format_number($L["Rows"]);echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();