@extends('web.master')

@section('style')
    
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/template-normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/who_we_are_arb.css')}}">
    <style>
        p{
            text-align: justify;
        }

        .slogen-main p{
            text-align: center;
        }
    </style>
@endsection

@section('content')
    
    <section class="ptb-20 " style="margin-top: 85px">
        <div class="container">
            <div class="link mb-20">
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li>من نحن</li>
                </ul>
            </div>
            <div class="story mb-40">
                <div class="left mx-4">
                    <h1 class="h1-shape">حكاية وطنية</h1>
                    <div class="paragraph">
                        <p>اعتــادت أن تــزور دور الأيتــام بانتظــام كغيرهــا مــن المتطوعيــن والكفـلاء تلعب مـع الأطفـال وتجلـب لهم الحلـوى. وكانــت تهتــم بطفــل عمــره ســنتين فــي أحــد الــدور، فكفلتــه حبــا فــي عمــل الخيــر وابتغــاءً فــي الجنــة، ولانشغالات الحياة، انقطعــت زياراتهــا المنتظمــة لهــذا الطفــل، ولكنهــا ظلــت تتكفــل بمصاريفــه دون أدنــى شــك أنهــا قــد تكــون مقصــرة فــي حقــه.
                            وبعــد مــرور عــدة ســنوات، دق جــرس منزلها وكانـت الســاعة قــد قاربــت علــى الواحــدة بعــد منتصــف الليــل، لتجــد أمامهــا شــابا غريبا يقــول لهــا
                            <span class="read">
                                “مامــا دخلينــي عنــدك أنــا هربــت مــن الــدار!!!” كان هــذا الشــاب هــو الطفــل الــذي كانــت تــزوره وتكفلــه منــذ زمــن بعيــد، وبالرغـم مـن حبهـا لــه، إلا أنهــا لــم تســتطع اســتقباله فــي بيتهــا. فما الجدوى من الحل المؤقت، لابد من حل جذري يجيب على السؤال لماذا لا يشعر هذا الشاب بالإنتماء والأمان داخل بيته الذي عاش وتربى فيه.
                                كان هــذا الحــدث بدايــة لرحلــة بحــث عن واقـع ومصيـر الأيتـام عندمـا يصبحوا في عمر الشباب. وكانــت مــن هنــا السـعي إلى احـداث تغييـر ملموس على أرض الواقع.
                                كانـت الفكـرة الأولـى هـو إنشـاء دار أيتـام نموذجيـة، ولكنهـا أدركت أن باقي الأطفال في دور الرعاية يحتاجون أيضا إلى دور نموذجية، وحياة كريمة. ومـن هنـا جـاءت فكـرة إنشـاء جمعيـة تكــون وطنــا لقضيــة الأيتــام، ويكــون هدفهـا أن تؤهـل المؤسسـات الإيوائية لتصبـح مكانـا آمنـا للأطفال خارج الرعاية الوالدية.
                                أسست السيدة عزة عبدالحميـد جمعية وطنية لتنمية وتطوير دور الايتام مـع 10 آخريـن آمنـوا بدورهـم فـي تقديـم حياة كريمة لكل يتيم.
                            </span>
                            </p>
                        <button class="read-more rad-10 mt-3">المزيد</button>
                    </div>
                </div>
                <div class="right">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ohsVcM3QClk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                </div>
            </div>
            <div class="vision mb-15">
                <h1 class="h1-shape mb-40">الرؤية</h1>
                <div>
                    <p>بيت خبرة في الرعاية البديلة للأطفال والشباب</p>
                </div>
            </div>
            <div class="mission">
                <div class="mission-left">
                <h1 class="h1-shape mb-40">رسالتنا</h1>
                <div>
                    <p>خلق مستقبل من الفرص المتكافئة للأطفال والشباب فاقدي الرعاية الوالدية من خلال توحيد النظم والمعايير وتفعيل واعتماد جميع مظاهر الرعاية البديلة</p>
                </div>
                </div>
                <div class="mission-right">
                    <img src="{{asset('img/draw.jpg')}}" alt="">
                </div>
            </div>
            <div class="values mb-80">
                <h1 class="h1-shape mb-40">قيمنا</h1>
                <div class="value-1">
                    <p>نؤمن في وطنية أننا سفراء للإنسانية ولذلك يتسم أسلوبنا بالإيجابية في أفعالنا، وأقوالنا، وردود أفعالنا داخل وخارج المؤسسة، فالإيجابية والإيمان بالقيم الإنسانية هي أساس قيمنا، والتي تشكل محور علاقات جميع العاملين والمتطوعين في وطنية مع بعضهم ومع شركاء القضية، والتي تتألف من أربع قيم أساسية</p>
                </div>
            </div>
            <div class="value-img">
                <img src="{{asset('img/value-arb-1.png')}}" alt="">
                <img src="{{asset('img/value-arb-2.png')}}" alt="">
                <img src="{{asset('img/value-arb-3.png')}}" alt="">
                <img src="{{asset('img/value-arb-4.png')}}" alt="">
            </div>
            <div class="methodology mb-60">
                <h1 class="h1-shape">منهجية وطنية</h1>
                <div class="pl-10">
                    <p>
                        تستند وطنية في تطوير برامجها ومشاريعها لتحقيق رسالتها على الدراسات العلمية وأفضل الممارسات، وطبقًا للمبادئ التوجيهية للأمم المتحدة الخاصة بالرعاية البديلة ومعايير جودة الرعاية البديلة، بما يخدم الأطراف المعنية في منظومة رعاية الاطفال والشباب فاقدي الرعاية الوالدية.
                    </p>
                </div>
            </div>
            <div class="box mb-40">
                <h1 class="txt-c">الأهداف الاستراتيجية طويلة المدى 2017 – 2023</h1>
                <div class="targets">
                    <div class="target">
                        <h1>١</h1>
                        <p> تمكين بيوت الرعاية البديلة من تفعيل واستدامة تطبيق معايير جودة الرعاية البديلة</p>
                    </div>
                    <div class="target">
                        <h1>٢</h1>
                        <p>تأهيل مقدمي الرعاية لضمان حياة كريمة للأطفال والشباب فاقدي الرعاية الوالدية</p>
                    </div>
                    <div class="target">
                        <h1>٣</h1>
                        <p> تمكين الشباب فاقدي الرعاية الوالدية اقتصاديا واجتماعيا للإنتقال بنجاح للحياة المستقلة </p>
                    </div>
                    <div class="target">
                        <h1>٤</h1>
                        <p> تطوير آليات المتابعة والتقييم لنظام الرعاية البديلة لاستدامة جودة الرعاية</p>
                    </div>
                    <div class="target">
                        <h1>٥</h1>
                        <p> الدعوة وكسب تأييد الجهات المعنية لتمكين الأطفال والشباب فاقدي الرعاية الوالدية</p>
                    </div>
                </div>
            </div>
            <div class="box-2 mb-40">
                <h1 class="txt-c">تعمل وطنية على تحقيق أهداف التنمية المستدامة و رؤية مصر 2030</h1>
                <div class="images justify-c-mobile">
                    <img src="{{asset('img/box-arb-1.png')}}" alt="">
                    <img src="{{asset('img/box-arb-2.png')}}" alt="">
                    <img src="{{asset('img/box-arb-3.png')}}" alt="">
                    <img src="{{asset('img/box-arb-4.png')}}" alt="">
                    <img src="{{asset('img/box-arb-5.png')}}" alt="">
                    <img src="{{asset('img/box-arb-6.png')}}" alt="">
                    <img src="{{asset('img/box-arb-7.png')}}" alt="">
                </div>
            </div>
            <div class="box-3">
                <div class="text">
                    <h1 class="h1-shape">تحقيق رؤية مصر 2030</h1>
                    <p>تعمــل وطنيــة علــى توفيـر الحيــاة الكريمـة لــكل الاطفــال والشـباب فاقـدي الرعايـة الوالديـة مـن خـلال تمكيــن بيــوت الرعايــة مــن تطبيــق معاييـر جـودة الرعايـة ورفـع كفـاءة كــوادر العامليــن ببيــوت الرعايــة وتأهيــل الشــباب للاســتقلالية والاعتمـاد علـى النفس بعد التخرج مـن البيـت كمـا تعمـل علـى إعـداد الأســر البديلــة لاحتضــان الأطفــال.</p>
                </div>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nh2buySIoBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="wataneya-btn txt-c mb-40">
                <a href="#">الملف التعريفي لجمعية وطنية</a>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/wataneya.js')}}"></script>
@endsection    
