<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia; 

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'ART TOY POP MART : HIRONO Shelter Series ',
        'description' => "คาแรคเตอร์ “Hirono” ได้แรงบันดาลใจมาจากตัวคุณ LANG เอง โดยมีที่มาว่าในอดีตคุณ LANG เกิดที่เมืองเหอหนาน 
        แล้วได้ย้ายมาอยู่ที่เมืองปักกิ่ง ด้วยปัญหาทางการเงินที่บ้านไม่ค่อยดีนัก จึงคิดว่าการมาอยู่ในเมืองหลวงจะช่วยให้ชีวิตดีขึ้น 
        แต่สิ่งที่คิดกลับไม่ใช่ เพราะเต็มไปด้วยความยากลำบาก 
        ความเศร้ามากมายในระหว่างการเติบโตเป็นผู้ใหญ่นี้
        เรื่องราวในตอนนั้นจึงถูกถ่ายทอดออกมาผ่าน Hirono เด็กชายที่ทำหน้าเศร้าตลอดเวลา 
        และคุณ LANG ยังมองอีกว่าคนเรามักมองผู้คนที่สดใสตลอด ดังนั้น Hirono เลยกลายเป็นตัวแทนของคนที่กำลังเศร้า 
        เพราะไม่ว่าคุณจะรู้สึกอย่างไร สุดท้ายแล้วมันก็คือตัวคุณที่ได้เติบโตขึ้น ถึงแม้จะไม่มีใครสนใจก็ตาม", 'price' => 633,
        'images' => [
         'https://p.lnwfile.com/_webp_max_images/600/600/53/qs/zi.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/va/c6/qc.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/yo/5q/xi.webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e8668d69fc5.jpg' ],

        ['id' => 2, 'name' => 'CRYBABY CRYING PARADE',
        'description' => "Art Toy กระแสน้อง CRY BABY กำลังมาแรงมากๆ 
        ในบ้านเราตอนนี้ เพราะตัวอาร์ตติสกำลังมีงาน Exhibitions ที่ฮอตปรอทแตกเป็นกระแสให้ชาวโซเชียลได้ไปถ่ายรูปกับยัยหนูน้อยขี้แย 
        ด้วยความที่อาร์ตติสเป็นคนไทยนี่เอง บวกกับความน่ารักของคาแรคเตอร์เด็กผู้หญิงจอมขี้แย เราจดจำครายเบบี้ได้จากใบหน้ายู่ๆ แก้มแดงๆ 
        โดยเฉพาะซิกเนเจอร์ที่จะต้องมีน้ำตาเม็ดโตๆ คอยย้อยจากดวงตาตุ่ยๆ ของเธอตลอดเวลา อย่างที่บอกว่าเธอฮอตมาก แน่นอนว่าจะต้องมีอาร์ตทอยส์ของเธอให้สะสมด้วยแน่นอน 
        ที่ดีงามสุดๆ คือราคาน้องค่อนข้างเป็นมิตรมากเลยทีเดียว 
        ในคอลเลคชั่นมีทั้งหมด 12 ตัว ถ้าเราซื้อยกกล่องก็จะได้น้องไปแบบไม่ซ้ำกันเลยถึง 12 ตัว ", 'price' => 1490,
        'images' => [
         'https://d2cva83hdk3bwc.cloudfront.net/pop-mart-crybaby-crying-parade-series-whole-set-1.jpg',
         'https://d2cva83hdk3bwc.cloudfront.net/pop-mart-crybaby-crying-parade-series-whole-set-2.jpg',
         'https://d2cva83hdk3bwc.cloudfront.net/pop-mart-crybaby-crying-parade-series-whole-set-3.jpg'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e86788ed3f0.jpg'],

        ['id' => 3, 'name' => 'Art Toy Labubu Art Gallery series ',
        'description' => "Art Toy กระต่ายน้อย Labubu หรือคาแรคเตอร์มอนสเตอร์กระต่ายน้อยหูยาว ตากลมโต ยืนสองขา
        เป็นฝีมือของอาร์ตติสชาวฮ่องกง จริงๆ แล้วน้องกระต่ายน้อยตัวนี้เขามีคอลเลคชั่นให้สะสมกันมากมายทีเดียวเชียวล่ะ
        เพียงแต่ว่าคอลฯ ที่เราอยากจะยกมาแนะนำให้ทุกคนได้รู้จักตอนนี้คือคอลเลคชั่นที่มีชื่อว่า ART GALLERY 
        กับการหยิบงานศิลปะชื่อก้องโลกจากหอศิลป์ที่เป็นภาพจำทั้งของคนที่รักในศิลปะหรือคนที่ไม่มีความรู้ในศิลปะเลยก็น่าจะเคยผ่านหูผ่านตามาบ้าง
         ทั้งภาพโมนาลิซ่า ภาพชายที่กำลังกรีดร้อง ภาพแวนโก๊ะ หรือคาแรคเตอร์ของศิลปินชื่อดังตั้งแต่แวนโก๊ะ เดวิด ซึ่งเจ้าของคาแรคเตอร์ก็ได้เอามาปรับให้เข้ากับตัวตนของ
          Labubu จนออกมาน่ารักน่าชัง กลายเป็นแกลเลอรีที่น่ารักน่าสะสมซะจริงๆ 
        สำหรับเซตนี้มีทั้งหมด 12 ตัว ให้เลือกสะสม productnation", 'price' => 877,
        'images' => [
         'https://i.ebayimg.com/images/g/ErgAAOSw3zpmIT4I/s-l960.webp',
         'https://i.ebayimg.com/images/g/6a0AAOSwCJlmIT4L/s-l960.webp',
         'https://i.ebayimg.com/images/g/Fj8AAOSwNb1mbblV/s-l1600.webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e86d7ca4f6c.webp'],

        ['id' => 4, 'name' => 'Art Toy Dimoo Retro Series POPMART ',
        'description' => "มาในธีม RETRO เราเลยจะได้เห็นความพิเศษเยอะหน่อย อย่างชุดของน้อง 
        บางตัวก็จะเป็นผ้าเย็บติดมาจริงๆ เลย แล้วไม่ใช่ผ้าไก่กา มาแบบประณีตประหนึ่งว่าเป็นชุดคนจริงๆ เลยทีเดียว 
        จะว่ายังไงดี แต่ละตัวก็จะมีดีเทลที่แตกต่างกันออกไปตามคาแรคเตอร์ของน้องๆ นั่นแหละนะ 
        ความพิเศษคือผิววัสดุของน้องเขาจะมาในรูปลักษณ์ความมันเงาแบบฉ่ำๆ 
        เพิ่มความน่ารักไปอีก นั่งดูทีไรก็สัมผัสได้ถึงความน่ารักอยู่ตลอดเวลา ในคอลฯ นี้มากันทั้งหมด12 ตัว 
        พร้อมตัวซีเคร็ทให้ไปลุ้นกันสุดๆ อีก 3 ตัว ", 'price' => 380,
        'images' => [
         'https://p.lnwfile.com/_webp_max_images/4096/4096/tt/ap/iy.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/pz/07/fd.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/ax/gg/52.webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e86e95322fc.jpg'],

        ['id' => 5, 'name' => 'Art Toy Crybaby ตุ๊กตาฟิกเกอร์ Monster Tears Series ',
        'description' => "ก้าวเข้าสู่โลกสุดแปลกของสัตว์ประหลาดจาก CRY - BABY ที่ซึ่งน้ำตาของพวกเขาเป็นสัญลักษณ์ของพวกเขา
         และความอ่อนโยนคือแก่นแท้ของพวกเขา! เตรียมพบกับมนุษย์หมาป่าสวมเสื้อคลุมสีชมพู แม่มดผู้ร่าเริงกระจายความสุขไปทุกที่ 
         และกอริลลาขี้อายที่ชอบซ่อนตัวอยู่ในเงามืด... สิ่งมีชีวิตเหล่านี้อาจดูแตกต่างออกไป 
        แต่ล้วนมีสิ่งหนึ่งที่เหมือนกัน จิตใจที่อ่อนโยนและอ่อนโยนของพวกเขา ", 'price' => 228,
        'images' => [
         'https://p.lnwfile.com/_webp_max_images/4096/4096/eu/dd/hv.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/zi/d5/rj.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/yd/ec/k7.webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e86fb526664.jpg'],

        ['id' => 6, 'name' => 'Art Toy Pino Jelly How Are You Feeling Today Series ',
        'description' => "คอลฯ นี้มาแนวน้องหมีเจลลี่แบร์เลย ตัวคาแรคเตอร์ของเราก็เลยยืดแขนยืดขาออกมากองกันข้างหน้า เห็นแล้วใจน้วยสุดๆ 
        แบบว่ามันปุ้กปิ้กสุดๆ เพราะอย่างที่เกริ่นไปก่อนหน้าว่าเห็นสีสันบนกล่องก็รู้เลยว่าเรื่องต้องมาแบบคัลเลอร์ฟูลแน่นอน ซึ่งก็จริงด้วยความที่คาแรคเตอร์แต่ละตัวถูกจัดคอมโพสต์เป็นน้องหมีจอลลี่แบร์ทั้งหมดเลย 
        สิ่งที่ทำให้น้องแตกต่างกันก็คงเป็นสีสันนี่แหละ แต่ละโทนสีคือเกิดมาเพื่อประหารใจคนรักของเล่นโดยแท้ 
        คอลนี้มีทั้งหมด 12 ตัว + อีก 2 ตัวละครลับ productnation", 'price' =>399 ,
        'images' => [
         'https://prod-eurasian-res.popmart.com/default/20240618_162617_814047_____02_____1200x1083.jpg?x-oss-process=image/format,webp',
         'https://prod-eurasian-res.popmart.com/default/20240618_162617_173810_____04_____1200x1191.jpg?x-oss-process=image/format,webp',
         'https://prod-eurasian-res.popmart.com/default/20240618_162617_423394_____08_____1200x1266.jpg?x-oss-process=image/format,webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e8702ce1bdc.jpg'],

        ['id' => 7, 'name' => 'Art Toy LAURA The Werewolves Tea Party ',
        'description' => "ขอเชิญทุกคนมาร่วมงานเลี้ยงน้ำชาในธีม The Werewolves Tea Party กับน้องลอร่าผ่านคาแรคเตอร์สุดคิ้วท์ 
        เช่น The Hunter, The Werewolf, The Witch, The Scapegoat และ The Admirer เป็นต้น 
        มีทั้งหมด 12 แบบ 1 ซีเคร็ต ให้ตามสะสมกัน", 'price' => 295,
        'images' => [
         'https://p.lnwfile.com/_webp_resize_images/300/300/2t/xi/cz.webp',
         'https://p.lnwfile.com/_webp_resize_images/300/300/mg/bq/i4.webp',
         'https://p.lnwfile.com/_webp_resize_images/300/300/ks/bm/6r.webp'
        ],'image' =>'https://p.lnwfile.com/_webp_max_images/4096/4096/i6/d2/xe.webp'],

        ['id' => 8, 'name' => 'Art Toy Pop MART SKULLPANDA The Sound Series Figures ',
        'description' => "SKULLPANDA/SKULLPANDA มีคำตอบแห่งอนาคตและเป็นโลหะที่สมบูรณ์แบบสำหรับคุณ
         ด้วยหน้ากากที่ถอดออกได้ซึ่งเป็นสัญลักษณ์ของการเลือกฟังหรือไม่ฟัง 
         ตัวเลขเหล่านี้จึงเป็นตัวแทนประสบการณ์การได้ยินที่ไม่เหมือนใคร แท่น รูปแบบ สี 
         และการแสดงออกทางสีหน้าล้วนมารวมกันเพื่อรวบรวมคลื่นเสียง
        และอารมณ์ที่แตกต่างกันออกไปในรูปแบบที่สะดุดตา", 'price' => 380,
        'images' => [
         'https://p.lnwfile.com/_webp_max_images/4096/4096/ch/wd/ie.webp',
         'https://p.lnwfile.com/_webp_resize_images/300/300/xv/x7/6v.webp',
         'https://p.lnwfile.com/_webp_resize_images/300/300/vm/pn/u6.webp'
        ],'image' =>'https://m.media-amazon.com/images/I/71Ji7ozOEhL.jpg'],

        ['id' => 9, 'name' => 'Art Toy Pop MART Teletubbies Trendy Figure Action ',
        'description' => "เทเลทับบี้ การ์ตูนยุค 90s’ ที่ครองใจชาวโลกอยู่แล้ว พอน้องมาอยู่ในรูปแบบอาร์ตทอยส์แบบนี้แล้วยิ่งน่าสะสมเข้าไปใหญ่ 
        น่าจะถูกใจสายสะสมพวกของเล่นเรโทรด้วย เพราะเทเลทับบี้เขาก็เหมือนเป็นตัวแทนของเล่นจากยุคอดีต
        จุดเด่น อยู่ที่ความคัลเลอร์ฟูลของคาแรคเตอร์ตัวการ์ตูน ทางศิลปินเขาก็เลยจับความสดใสนี้มาแมตช์กับน้องเทเลทับบี้ 
        เสริมความน่ารักให้ด้วยการเพิ่มอากัปกิริยาต่างๆ หรือแม้แต่กระทั่งการเพิ่มพร๊อพเสริมลงไปบนอาร์ตทอยส์  ดูเหมือนว่านอกจากความน่ารักแล้ว 
        ทั้งวัสดุและผิวสัมผัสของคอลเลคชั่นนี้ก็ยังดีมาก", 'price' => 550,
        'images' => [
         'https://popmart.sg/cdn/shop/files/20240920_114738_618773____teletubbies-po-trendy-figure-designer-figurines-pop-mart-us-scence-2_____1200x1200_ca1e1e24-d6f8-48e4-adeb-152ccbe15459_900x.jpg?v=1727938444',
         'https://down-th.img.susercontent.com/file/cn-11134207-7ras8-m0lfksaefia678.webp',
         'https://down-th.img.susercontent.com/file/cn-11134207-7ras8-m0lfksaecptze3.webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e872b140e4b.jpg'],

        ['id' => 10, 'name' => 'Art Toy Molly x Warner Bros. 100th Anniversary Series ',
        'description' => "Molly x WB 100th ฉลองครบรอบ 100 ปี มาคอลแลปกับน้องมอลลี่
         มาพร้อมกับตัวการ์ตูนจากหนังฟอร์มยักษ์ของค่าย Warner Bros 
         โดยเฉพาะน้อง Secret จากหนังเรื่อง The Matrix
        ขนาดสินค้า: สูงประมาณ 10 - 12 ซ.ม.", 'price' =>529 ,
        'images' => [
         'https://cq.lnwfile.com/_webp_max_images/4096/4096/9g/dx/bi.webp',
         'https://cq.lnwfile.com/_webp_max_images/4096/4096/1r/gr/81.webp',
         'https://cq.lnwfile.com/_webp_max_images/4096/4096/ax/72/ih.webp'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/64e873709d19e.jpg'],

        ['id' => 11, 'name' => 'ART TOY Farmer Bob (ลุงบ๊อบ) Social animal Series ศิลปิน Jo Young Woon ',
        'description' => "ในคอลเลคชั่นใหม่นี้ใช้วัสดุเป็น PVC+ABS มีความสูงอยู่ที่ 72-93 mm 
        แบ่งออกเป็นตัวปกติ 18 ตัว ตัวพิเศษ 5 และตัวซีเครทอีก 2 
        สำหรับตัวซีเครทมีชื่อว่า Move On และ Nighty Night", 'price' => 690,
        'images' => [
         'https://uptogu.co/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%88%E0%B8%AD-2566-07-08-%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2-15.23.57-1024x642.png',
         'https://uptogu.co/wp-content/uploads/2023/07/FARMER-BOB-SOCIAL-ANIMAL.jpg',
         'https://uptogu.co/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%88%E0%B8%AD-2566-07-08-%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2-15.24.05-768x370.png'
        ],'image' =>'https://cdn1.productnation.co/stg/sites/6/660a4b2204f4a.webp'],

        ['id' => 12, 'name' => 'Art Toy Amitofo Trend Secret Box ',
        'description' => "อาร์ตทอยส่งตรงจากประเทศจีน ที่มากับท่าทางหลากหลายกิจวัตรประจำวัน  
        จนวัยรุ่นพูดกันดราม่ากันว่านี่คือ กล่องจุ่มคนบาปเรียกติดปากกันว่า 
        หลวงเจ๊  โดยแต่ละทางท่านั้นพีคสุดๆนรกกินหัวมากๆ  ไม่ว่าจะนอน  
        บุดด้าตอนถือช้อนซ่อมรออีสข้าว ปลดทุกข์  เล่นกับแมว  ตอนทำงาน  และพีคสุดคือ ตัวซุปเปอร์ซีเคร็ต 
        บุดด้ามาร์กหน้าแบบจึ้งๆ สับๆ  ส่องกระจก แถมห่มผ้าขนหนูสีชมพูสุดแบ๊ว งานนี้ใครที่ทนความจึ้งไม่ไหวจะต้องจุ่มเอานะ
        ขนาดสินค้า: สูงประมาณ 9-10 ซม.", 'price' => 590,
        'images' => [
         'https://p.lnwfile.com/_webp_max_images/4096/4096/o5/7j/e3.webp',
         'https://p.lnwfile.com/_webp_max_images/4096/4096/an/8u/yi.webp',
         'https://p.lnwfile.com/_webp_resize_images/300/300/ru/10/th.webp'
        ],'image' =>'https://p.lnwfile.com/_webp_max_images/4096/4096/fv/ur/md.webp']

        ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id); 

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}