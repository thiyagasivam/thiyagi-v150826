<?php
/**
 * Pincode District Page Generator
 * Handles URLs like: /pincode/tamil-nadu/pudukkottai
 */

class PincodeDistrictPage {
    private $samplePincodes = [
        'tamil-nadu' => [
            'pudukkottai' => [
                ['area' => 'puthambur', 'pincode' => '622501'],
                ['area' => 'alangudi', 'pincode' => '614701'], 
                ['area' => 'aranthangi', 'pincode' => '614616'],
                ['area' => 'avudayarkoil', 'pincode' => '622001'],
                ['area' => 'gandarvakottai', 'pincode' => '622303'],
                ['area' => 'illuppur', 'pincode' => '622102'],
                ['area' => 'karambakudi', 'pincode' => '622003'],
                ['area' => 'kulathur', 'pincode' => '622204'],
                ['area' => 'kunnandarkoil', 'pincode' => '622203'],
                ['area' => 'manamelkudi', 'pincode' => '614804'],
                ['area' => 'ponnamaravathi', 'pincode' => '622302'],
                ['area' => 'pudukkottai', 'pincode' => '622001'],
                ['area' => 'thirumayam', 'pincode' => '622507'],
                ['area' => 'viralimalai', 'pincode' => '621316']
            ],
            'chennai' => [
                ['area' => 'adyar', 'pincode' => '600020'],
                ['area' => 'anna-nagar', 'pincode' => '600040'],
                ['area' => 'egmore', 'pincode' => '600008'],
                ['area' => 'mylapore', 'pincode' => '600004'],
                ['area' => 't-nagar', 'pincode' => '600017']
            ],
            'coimbatore' => [
                ['area' => 'gandhipuram', 'pincode' => '641012'],
                ['area' => 'peelamedu', 'pincode' => '641004'],
                ['area' => 'rs-puram', 'pincode' => '641002'],
                ['area' => 'saibaba-colony', 'pincode' => '641011'],
                ['area' => 'singanallur', 'pincode' => '641005'],
                ['area' => 'saravanampatti', 'pincode' => '641035'],
                ['area' => 'vadavalli', 'pincode' => '641041'],
                ['area' => 'kuniamuthur', 'pincode' => '641008']
            ],
            'ariyalur' => [
                ['area' => 'ariyalur', 'pincode' => '621704'],
                ['area' => 'andimadam', 'pincode' => '621801'],
                ['area' => 'sendurai', 'pincode' => '621714'],
                ['area' => 'udayarpalayam', 'pincode' => '621713'],
                ['area' => 'jayamkondam', 'pincode' => '621802'],
                ['area' => 'thirumanur', 'pincode' => '621712'],
                ['area' => 'edayakurichi', 'pincode' => '621716']
            ],
            'chengalpattu' => [
                ['area' => 'chengalpattu', 'pincode' => '603001'],
                ['area' => 'madurantakam', 'pincode' => '603306'],
                ['area' => 'tambaram', 'pincode' => '600045'],
                ['area' => 'pallavaram', 'pincode' => '600043'],
                ['area' => 'chromepet', 'pincode' => '600044'],
                ['area' => 'guduvanchery', 'pincode' => '603202']
            ],
            'cuddalore' => [
                ['area' => 'cuddalore', 'pincode' => '607001'],
                ['area' => 'neyveli', 'pincode' => '607801'],
                ['area' => 'chidambaram', 'pincode' => '608001'],
                ['area' => 'panruti', 'pincode' => '607106'],
                ['area' => 'vridhachalam', 'pincode' => '606001'],
                ['area' => 'kattumannarkoil', 'pincode' => '608301']
            ],
            'dharmapuri' => [
                ['area' => 'dharmapuri', 'pincode' => '636701'],
                ['area' => 'krishnagiri', 'pincode' => '635001'],
                ['area' => 'hosur', 'pincode' => '635109'],
                ['area' => 'palacode', 'pincode' => '636808'],
                ['area' => 'harur', 'pincode' => '636903'],
                ['area' => 'pennagaram', 'pincode' => '636810']
            ],
            'dindigul' => [
                ['area' => 'dindigul', 'pincode' => '624001'],
                ['area' => 'kodaikanal', 'pincode' => '624101'],
                ['area' => 'palani', 'pincode' => '624601'],
                ['area' => 'natham', 'pincode' => '624401'],
                ['area' => 'vedasandur', 'pincode' => '624710'],
                ['area' => 'oddanchatram', 'pincode' => '624619']
            ],
            'erode' => [
                ['area' => 'erode', 'pincode' => '638001'],
                ['area' => 'gobichettipalayam', 'pincode' => '638452'],
                ['area' => 'sathyamangalam', 'pincode' => '638401'],
                ['area' => 'bhavani', 'pincode' => '638301'],
                ['area' => 'perundurai', 'pincode' => '638052'],
                ['area' => 'modakurichi', 'pincode' => '638104']
            ],
            'kallakurichi' => [
                ['area' => 'kallakurichi', 'pincode' => '606202'],
                ['area' => 'sankarapuram', 'pincode' => '606401'],
                ['area' => 'ulundurpet', 'pincode' => '606107'],
                ['area' => 'thirukovilur', 'pincode' => '605757'],
                ['area' => 'chinnaselam', 'pincode' => '606301']
            ],
            'kanchipuram' => [
                ['area' => 'kanchipuram', 'pincode' => '631501'],
                ['area' => 'sriperumbudur', 'pincode' => '602105'],
                ['area' => 'uthiramerur', 'pincode' => '603406'],
                ['area' => 'walajabad', 'pincode' => '631605'],
                ['area' => 'cheyyur', 'pincode' => '603204']
            ],
            'kanyakumari' => [
                ['area' => 'nagercoil', 'pincode' => '629001'],
                ['area' => 'kanyakumari', 'pincode' => '629702'],
                ['area' => 'marthandam', 'pincode' => '629165'],
                ['area' => 'thuckalay', 'pincode' => '629175'],
                ['area' => 'colachel', 'pincode' => '629251'],
                ['area' => 'padmanabhapuram', 'pincode' => '629175']
            ],
            'karur' => [
                ['area' => 'karur', 'pincode' => '639001'],
                ['area' => 'kulithalai', 'pincode' => '639120'],
                ['area' => 'krishnarayapuram', 'pincode' => '639115'],
                ['area' => 'pugalur', 'pincode' => '639103'],
                ['area' => 'aravakurichi', 'pincode' => '639102']
            ],
            'krishnagiri' => [
                ['area' => 'krishnagiri', 'pincode' => '635001'],
                ['area' => 'hosur', 'pincode' => '635109'],
                ['area' => 'pochampalli', 'pincode' => '635301'],
                ['area' => 'uthangarai', 'pincode' => '635207'],
                ['area' => 'bargur', 'pincode' => '635104'],
                ['area' => 'denkanikottai', 'pincode' => '635107']
            ],
            'madurai' => [
                ['area' => 'madurai', 'pincode' => '625001'],
                ['area' => 'thiruparankundram', 'pincode' => '625005'],
                ['area' => 'usilampatti', 'pincode' => '625532'],
                ['area' => 'melur', 'pincode' => '625106'],
                ['area' => 'vadipatti', 'pincode' => '624803'],
                ['area' => 'kalligudi', 'pincode' => '625402']
            ],
            'mayiladuthurai' => [
                ['area' => 'mayiladuthurai', 'pincode' => '609001'],
                ['area' => 'sirkazhi', 'pincode' => '609110'],
                ['area' => 'tharangambadi', 'pincode' => '609306'],
                ['area' => 'kuthalam', 'pincode' => '614101'],
                ['area' => 'poompuhar', 'pincode' => '609105']
            ],
            'nagapattinam' => [
                ['area' => 'nagapattinam', 'pincode' => '611001'],
                ['area' => 'vedaranyam', 'pincode' => '614707'],
                ['area' => 'kilvelur', 'pincode' => '609107'],
                ['area' => 'thirukkuvalai', 'pincode' => '610204'],
                ['area' => 'thalainayar', 'pincode' => '614804']
            ],
            'namakkal' => [
                ['area' => 'namakkal', 'pincode' => '637001'],
                ['area' => 'rasipuram', 'pincode' => '637408'],
                ['area' => 'tiruchengode', 'pincode' => '637211'],
                ['area' => 'kolli-hills', 'pincode' => '637411'],
                ['area' => 'paramathi-velur', 'pincode' => '638182']
            ],
            'nilgiris' => [
                ['area' => 'ooty', 'pincode' => '643001'],
                ['area' => 'coonoor', 'pincode' => '643101'],
                ['area' => 'kotagiri', 'pincode' => '643217'],
                ['area' => 'gudalur', 'pincode' => '643212'],
                ['area' => 'wellington', 'pincode' => '643231']
            ],
            'perambalur' => [
                ['area' => 'perambalur', 'pincode' => '621212'],
                ['area' => 'kunnam', 'pincode' => '621802'],
                ['area' => 'alathur', 'pincode' => '621651'],
                ['area' => 'veppanthattai', 'pincode' => '621115']
            ],
            'ramanathapuram' => [
                ['area' => 'ramanathapuram', 'pincode' => '623501'],
                ['area' => 'rameswaram', 'pincode' => '623526'],
                ['area' => 'paramakudi', 'pincode' => '623707'],
                ['area' => 'mandapam', 'pincode' => '623519'],
                ['area' => 'mudukulathur', 'pincode' => '623704']
            ],
            'ranipet' => [
                ['area' => 'ranipet', 'pincode' => '632401'],
                ['area' => 'arcot', 'pincode' => '632503'],
                ['area' => 'walajapet', 'pincode' => '632513'],
                ['area' => 'nemili', 'pincode' => '631051'],
                ['area' => 'sholinghur', 'pincode' => '631102']
            ],
            'salem' => [
                ['area' => 'salem', 'pincode' => '636001'],
                ['area' => 'mettur', 'pincode' => '636401'],
                ['area' => 'yercaud', 'pincode' => '636601'],
                ['area' => 'attur', 'pincode' => '636102'],
                ['area' => 'sankari', 'pincode' => '637301'],
                ['area' => 'omalur', 'pincode' => '636455']
            ],
            'sivaganga' => [
                ['area' => 'sivaganga', 'pincode' => '630561'],
                ['area' => 'karaikudi', 'pincode' => '630001'],
                ['area' => 'devakottai', 'pincode' => '630302'],
                ['area' => 'manamadurai', 'pincode' => '630606'],
                ['area' => 'tiruppattur', 'pincode' => '630211']
            ],
            'tenkasi' => [
                ['area' => 'tenkasi', 'pincode' => '627811'],
                ['area' => 'sankarankovil', 'pincode' => '627756'],
                ['area' => 'kadayanallur', 'pincode' => '627751'],
                ['area' => 'veerakeralampudur', 'pincode' => '627806'],
                ['area' => 'alangulam', 'pincode' => '627301']
            ],
            'thanjavur' => [
                ['area' => 'thanjavur', 'pincode' => '613001'],
                ['area' => 'kumbakonam', 'pincode' => '612001'],
                ['area' => 'pattukkottai', 'pincode' => '614601'],
                ['area' => 'thiruvidaimarudur', 'pincode' => '612104'],
                ['area' => 'papanasam', 'pincode' => '614205'],
                ['area' => 'orathanadu', 'pincode' => '614625']
            ],
            'theni' => [
                ['area' => 'theni', 'pincode' => '625531'],
                ['area' => 'periyakulam', 'pincode' => '625601'],
                ['area' => 'bodinayakanur', 'pincode' => '625513'],
                ['area' => 'uthamapalayam', 'pincode' => '625533'],
                ['area' => 'andipatti', 'pincode' => '625512']
            ],
            'thoothukudi' => [
                ['area' => 'thoothukudi', 'pincode' => '628001'],
                ['area' => 'kovilpatti', 'pincode' => '628501'],
                ['area' => 'tiruchendur', 'pincode' => '628215'],
                ['area' => 'ettayapuram', 'pincode' => '628801'],
                ['area' => 'kayathar', 'pincode' => '628204'],
                ['area' => 'sathankulam', 'pincode' => '628704']
            ],
            'tiruchirappalli' => [
                ['area' => 'tiruchirappalli', 'pincode' => '620001'],
                ['area' => 'srirangam', 'pincode' => '620006'],
                ['area' => 'lalgudi', 'pincode' => '621601'],
                ['area' => 'musiri', 'pincode' => '621201'],
                ['area' => 'manapparai', 'pincode' => '621306'],
                ['area' => 'thuraiyur', 'pincode' => '621010']
            ],
            'tirunelveli' => [
                ['area' => 'tirunelveli', 'pincode' => '627001'],
                ['area' => 'nellai', 'pincode' => '627007'],
                ['area' => 'ambasamudram', 'pincode' => '627401'],
                ['area' => 'nanguneri', 'pincode' => '627108'],
                ['area' => 'radhapuram', 'pincode' => '627111'],
                ['area' => 'cheranmahadevi', 'pincode' => '627414']
            ],
            'tirupattur' => [
                ['area' => 'tirupattur', 'pincode' => '635601'],
                ['area' => 'vaniyambadi', 'pincode' => '635751'],
                ['area' => 'ambur', 'pincode' => '635802'],
                ['area' => 'natrampalli', 'pincode' => '635852'],
                ['area' => 'jolarpet', 'pincode' => '635851']
            ],
            'tiruppur' => [
                ['area' => 'tiruppur', 'pincode' => '641601'],
                ['area' => 'avinashi', 'pincode' => '641654'],
                ['area' => 'dharapuram', 'pincode' => '638656'],
                ['area' => 'kangeyam', 'pincode' => '638701'],
                ['area' => 'palladam', 'pincode' => '641664'],
                ['area' => 'udumalpet', 'pincode' => '642126']
            ],
            'tiruvallur' => [
                ['area' => 'tiruvallur', 'pincode' => '602001'],
                ['area' => 'ponneri', 'pincode' => '601204'],
                ['area' => 'gummidipoondi', 'pincode' => '601201'],
                ['area' => 'thiruthani', 'pincode' => '631209'],
                ['area' => 'poonamallee', 'pincode' => '600056'],
                ['area' => 'avadi', 'pincode' => '600054']
            ],
            'tiruvannamalai' => [
                ['area' => 'tiruvannamalai', 'pincode' => '606601'],
                ['area' => 'arani', 'pincode' => '632301'],
                ['area' => 'cheyyar', 'pincode' => '604407'],
                ['area' => 'vandavasi', 'pincode' => '604408'],
                ['area' => 'polur', 'pincode' => '606905'],
                ['area' => 'kilpennathur', 'pincode' => '606115']
            ],
            'tiruvarur' => [
                ['area' => 'tiruvarur', 'pincode' => '610001'],
                ['area' => 'mannargudi', 'pincode' => '614016'],
                ['area' => 'thiruthuraipoondi', 'pincode' => '614713'],
                ['area' => 'valangaiman', 'pincode' => '612804'],
                ['area' => 'nannilam', 'pincode' => '609702']
            ],
            'vellore' => [
                ['area' => 'vellore', 'pincode' => '632001'],
                ['area' => 'katpadi', 'pincode' => '632007'],
                ['area' => 'gudiyatham', 'pincode' => '632602'],
                ['area' => 'pernambut', 'pincode' => '632301'],
                ['area' => 'anaicut', 'pincode' => '632506'],
                ['area' => 'arakkonam', 'pincode' => '631001']
            ],
            'viluppuram' => [
                ['area' => 'viluppuram', 'pincode' => '605602'],
                ['area' => 'tindivanam', 'pincode' => '604001'],
                ['area' => 'gingee', 'pincode' => '604202'],
                ['area' => 'vikravandi', 'pincode' => '605652'],
                ['area' => 'vanur', 'pincode' => '605111'],
                ['area' => 'mailam', 'pincode' => '604506']
            ],
            'virudhunagar' => [
                ['area' => 'virudhunagar', 'pincode' => '626001'],
                ['area' => 'sivakasi', 'pincode' => '626123'],
                ['area' => 'srivilliputhur', 'pincode' => '626125'],
                ['area' => 'sattur', 'pincode' => '626203'],
                ['area' => 'rajapalayam', 'pincode' => '626117'],
                ['area' => 'aruppukkottai', 'pincode' => '626101']
            ]
        ],
        'andhra-pradesh' => [
            'anantapur' => [
                ['area' => 'anantapur', 'pincode' => '515001'],
                ['area' => 'guntakal', 'pincode' => '515801'],
                ['area' => 'tadpatri', 'pincode' => '515411'],
                ['area' => 'hindupur', 'pincode' => '515201'],
                ['area' => 'penukonda', 'pincode' => '515110'],
                ['area' => 'dharmavaram', 'pincode' => '515671']
            ],
            'chittoor' => [
                ['area' => 'chittoor', 'pincode' => '517001'],
                ['area' => 'tirupati', 'pincode' => '517501'],
                ['area' => 'madanapalle', 'pincode' => '517325'],
                ['area' => 'puttur', 'pincode' => '517583'],
                ['area' => 'srikalahasti', 'pincode' => '517644'],
                ['area' => 'chandragiri', 'pincode' => '517101']
            ],
            'east-godavari' => [
                ['area' => 'kakinada', 'pincode' => '533001'],
                ['area' => 'rajahmundry', 'pincode' => '533101'],
                ['area' => 'amalapuram', 'pincode' => '533201'],
                ['area' => 'pithapuram', 'pincode' => '533450'],
                ['area' => 'tuni', 'pincode' => '533401'],
                ['area' => 'ramachandrapuram', 'pincode' => '533255']
            ],
            'guntur' => [
                ['area' => 'guntur', 'pincode' => '522001'],
                ['area' => 'vijayawada', 'pincode' => '520001'],
                ['area' => 'tenali', 'pincode' => '522201'],
                ['area' => 'narasaraopet', 'pincode' => '522601'],
                ['area' => 'bapatla', 'pincode' => '522101'],
                ['area' => 'chilakaluripet', 'pincode' => '522616']
            ],
            'kadapa' => [
                ['area' => 'kadapa', 'pincode' => '516001'],
                ['area' => 'proddatur', 'pincode' => '516360'],
                ['area' => 'jammalamadugu', 'pincode' => '516434'],
                ['area' => 'rajampet', 'pincode' => '516115'],
                ['area' => 'pulivendula', 'pincode' => '516390']
            ],
            'krishna' => [
                ['area' => 'machilipatnam', 'pincode' => '521001'],
                ['area' => 'gudivada', 'pincode' => '521301'],
                ['area' => 'vijayawada', 'pincode' => '520010'],
                ['area' => 'jaggayyapeta', 'pincode' => '521175'],
                ['area' => 'nuzvidu', 'pincode' => '521201']
            ],
            'kurnool' => [
                ['area' => 'kurnool', 'pincode' => '518001'],
                ['area' => 'nandyal', 'pincode' => '518501'],
                ['area' => 'adoni', 'pincode' => '518301'],
                ['area' => 'yemmiganur', 'pincode' => '518360'],
                ['area' => 'allagadda', 'pincode' => '518543']
            ],
            'nellore' => [
                ['area' => 'nellore', 'pincode' => '524001'],
                ['area' => 'gudur', 'pincode' => '524101'],
                ['area' => 'kavali', 'pincode' => '524201'],
                ['area' => 'atmakur', 'pincode' => '524322'],
                ['area' => 'venkatagiri', 'pincode' => '524132']
            ],
            'prakasam' => [
                ['area' => 'ongole', 'pincode' => '523001'],
                ['area' => 'chirala', 'pincode' => '523155'],
                ['area' => 'kandukur', 'pincode' => '523105'],
                ['area' => 'markapur', 'pincode' => '523316'],
                ['area' => 'addanki', 'pincode' => '523201']
            ],
            'srikakulam' => [
                ['area' => 'srikakulam', 'pincode' => '532001'],
                ['area' => 'palasa', 'pincode' => '532221'],
                ['area' => 'narasannapeta', 'pincode' => '532421'],
                ['area' => 'amadalavalasa', 'pincode' => '532185'],
                ['area' => 'ichapuram', 'pincode' => '532312']
            ],
            'visakhapatnam' => [
                ['area' => 'visakhapatnam', 'pincode' => '530001'],
                ['area' => 'vizag', 'pincode' => '530016'],
                ['area' => 'anakapalle', 'pincode' => '531001'],
                ['area' => 'narsipatnam', 'pincode' => '531116'],
                ['area' => 'bheemunipatnam', 'pincode' => '531163'],
                ['area' => 'kothavalasa', 'pincode' => '535183']
            ],
            'vizianagaram' => [
                ['area' => 'vizianagaram', 'pincode' => '535001'],
                ['area' => 'bobbili', 'pincode' => '535558'],
                ['area' => 'parvathipuram', 'pincode' => '535522'],
                ['area' => 'salur', 'pincode' => '535591'],
                ['area' => 'cheepurupalli', 'pincode' => '535128']
            ],
            'west-godavari' => [
                ['area' => 'eluru', 'pincode' => '534001'],
                ['area' => 'bhimavaram', 'pincode' => '534201'],
                ['area' => 'tadepalligudem', 'pincode' => '534101'],
                ['area' => 'narasapuram', 'pincode' => '534275'],
                ['area' => 'tanuku', 'pincode' => '534211']
            ],
            'alluri-sitharama-raju' => [
                ['area' => 'paderu', 'pincode' => '531024'],
                ['area' => 'chintapalle', 'pincode' => '531111'],
                ['area' => 'araku-valley', 'pincode' => '531149'],
                ['area' => 'anantagiri', 'pincode' => '531151']
            ],
            'anakapalli' => [
                ['area' => 'anakapalle', 'pincode' => '531001'],
                ['area' => 'yelamanchili', 'pincode' => '531055'],
                ['area' => 'narsipatnam', 'pincode' => '531116'],
                ['area' => 'madugula', 'pincode' => '531157']
            ],
            'eluru' => [
                ['area' => 'eluru', 'pincode' => '534001'],
                ['area' => 'denduluru', 'pincode' => '534416'],
                ['area' => 'chintalapudi', 'pincode' => '534460'],
                ['area' => 'kamavarapukota', 'pincode' => '534312']
            ],
            'kakinada' => [
                ['area' => 'kakinada', 'pincode' => '533001'],
                ['area' => 'pithapuram', 'pincode' => '533450'],
                ['area' => 'tuni', 'pincode' => '533401'],
                ['area' => 'prathipadu', 'pincode' => '533238']
            ],
            'konaseema' => [
                ['area' => 'amalapuram', 'pincode' => '533201'],
                ['area' => 'razole', 'pincode' => '533242'],
                ['area' => 'mummidivaram', 'pincode' => '533216'],
                ['area' => 'kothapeta', 'pincode' => '533234']
            ],
            'ntr' => [
                ['area' => 'vijayawada', 'pincode' => '520001'],
                ['area' => 'nandigama', 'pincode' => '521185'],
                ['area' => 'tiruvuru', 'pincode' => '521235'],
                ['area' => 'jaggaiahpet', 'pincode' => '521175']
            ],
            'parvathipuram-manyam' => [
                ['area' => 'parvathipuram', 'pincode' => '535522'],
                ['area' => 'palakonda', 'pincode' => '532440'],
                ['area' => 'kurupam', 'pincode' => '535527'],
                ['area' => 'saluru', 'pincode' => '535591']
            ],
            'palnadu' => [
                ['area' => 'narasaraopet', 'pincode' => '522601'],
                ['area' => 'gurazala', 'pincode' => '522415'],
                ['area' => 'sattenapalle', 'pincode' => '522403'],
                ['area' => 'macherla', 'pincode' => '522426']
            ],
            'bapatla' => [
                ['area' => 'bapatla', 'pincode' => '522101'],
                ['area' => 'chirala', 'pincode' => '523155'],
                ['area' => 'parchur', 'pincode' => '523169'],
                ['area' => 'addanki', 'pincode' => '523201']
            ],
            'tirupati' => [
                ['area' => 'tirupati', 'pincode' => '517501'],
                ['area' => 'srikalahasti', 'pincode' => '517644'],
                ['area' => 'puttur', 'pincode' => '517583'],
                ['area' => 'chandragiri', 'pincode' => '517101']
            ],
            'annamayya' => [
                ['area' => 'rayachoti', 'pincode' => '516269'],
                ['area' => 'madanapalle', 'pincode' => '517325'],
                ['area' => 'rajampet', 'pincode' => '516115'],
                ['area' => 'b-kothakota', 'pincode' => '516277']
            ],
            'sri-sathya-sai' => [
                ['area' => 'puttaparthi', 'pincode' => '515134'],
                ['area' => 'hindupur', 'pincode' => '515201'],
                ['area' => 'penukonda', 'pincode' => '515110'],
                ['area' => 'dharmavaram', 'pincode' => '515671']
            ]
        ],
        'arunachal-pradesh' => [
            'anjaw' => [
                ['area' => 'hawai', 'pincode' => '792110'],
                ['area' => 'kibithu', 'pincode' => '792111'],
                ['area' => 'hayuliang', 'pincode' => '792113'],
                ['area' => 'walong', 'pincode' => '792114']
            ],
            'changlang' => [
                ['area' => 'changlang', 'pincode' => '792001'],
                ['area' => 'miao', 'pincode' => '792121'],
                ['area' => 'nampong', 'pincode' => '792103'],
                ['area' => 'jairampur', 'pincode' => '792103']
            ],
            'east-kameng' => [
                ['area' => 'seppa', 'pincode' => '790001'],
                ['area' => 'chayang-tajo', 'pincode' => '790103'],
                ['area' => 'pakke-kessang', 'pincode' => '790104'],
                ['area' => 'pipu', 'pincode' => '790105']
            ],
            'east-siang' => [
                ['area' => 'pasighat', 'pincode' => '791102'],
                ['area' => 'mebo', 'pincode' => '791121'],
                ['area' => 'ruksin', 'pincode' => '791123'],
                ['area' => 'nari', 'pincode' => '791124']
            ],
            'west-siang' => [
                ['area' => 'along', 'pincode' => '791001'],
                ['area' => 'basar', 'pincode' => '791101'],
                ['area' => 'daporijo', 'pincode' => '791122'],
                ['area' => 'liromoba', 'pincode' => '791125']
            ],
            'papum-pare' => [
                ['area' => 'itanagar', 'pincode' => '791111'],
                ['area' => 'naharlagun', 'pincode' => '791110'],
                ['area' => 'doimukh', 'pincode' => '791112'],
                ['area' => 'sagalee', 'pincode' => '791113']
            ],
            'dibang-valley' => [
                ['area' => 'anini', 'pincode' => '792130'],
                ['area' => 'roing', 'pincode' => '792110'],
                ['area' => 'etalin', 'pincode' => '792131'],
                ['area' => 'mipi', 'pincode' => '792132']
            ],
            'kurung-kumey' => [
                ['area' => 'koloriang', 'pincode' => '791120'],
                ['area' => 'palin', 'pincode' => '791119'],
                ['area' => 'sangram', 'pincode' => '791118'],
                ['area' => 'parsi-parlo', 'pincode' => '791117']
            ],
            'lohit' => [
                ['area' => 'tezu', 'pincode' => '792001'],
                ['area' => 'namsai', 'pincode' => '792103'],
                ['area' => 'wakro', 'pincode' => '792104'],
                ['area' => 'sunpura', 'pincode' => '792105']
            ],
            'lower-dibang-valley' => [
                ['area' => 'roing', 'pincode' => '792110'],
                ['area' => 'dambuk', 'pincode' => '792115'],
                ['area' => 'hunli', 'pincode' => '792116'],
                ['area' => 'koronu', 'pincode' => '792117']
            ],
            'lower-subansiri' => [
                ['area' => 'ziro', 'pincode' => '791120'],
                ['area' => 'old-ziro', 'pincode' => '791120'],
                ['area' => 'yachuli', 'pincode' => '791119'],
                ['area' => 'tali', 'pincode' => '791126']
            ],
            'namsai' => [
                ['area' => 'namsai', 'pincode' => '792103'],
                ['area' => 'chongkham', 'pincode' => '792106'],
                ['area' => 'lathao', 'pincode' => '792107'],
                ['area' => 'mahadevpur', 'pincode' => '792108']
            ],
            'tawang' => [
                ['area' => 'tawang', 'pincode' => '790104'],
                ['area' => 'lumla', 'pincode' => '790106'],
                ['area' => 'jang', 'pincode' => '790107'],
                ['area' => 'zemithang', 'pincode' => '790108']
            ],
            'tirap' => [
                ['area' => 'khonsa', 'pincode' => '792121'],
                ['area' => 'longding', 'pincode' => '792131'],
                ['area' => 'kanubari', 'pincode' => '792122'],
                ['area' => 'dadam', 'pincode' => '792123']
            ],
            'upper-siang' => [
                ['area' => 'yingkiong', 'pincode' => '791001'],
                ['area' => 'tuting', 'pincode' => '791002'],
                ['area' => 'geku', 'pincode' => '791003'],
                ['area' => 'mariyang', 'pincode' => '791004']
            ],
            'upper-subansiri' => [
                ['area' => 'daporijo', 'pincode' => '791122'],
                ['area' => 'dumporijo', 'pincode' => '791127'],
                ['area' => 'taliha', 'pincode' => '791128'],
                ['area' => 'nacho', 'pincode' => '791129']
            ],
            'west-kameng' => [
                ['area' => 'bomdila', 'pincode' => '790001'],
                ['area' => 'dirang', 'pincode' => '790101'],
                ['area' => 'kalaktang', 'pincode' => '790102'],
                ['area' => 'thungri', 'pincode' => '790109']
            ],
            'longding' => [
                ['area' => 'longding', 'pincode' => '792131'],
                ['area' => 'kanubari', 'pincode' => '792122'],
                ['area' => 'pongchau', 'pincode' => '792132'],
                ['area' => 'pumao', 'pincode' => '792133']
            ],
            'lower-siang' => [
                ['area' => 'likabali', 'pincode' => '791120'],
                ['area' => 'gensi', 'pincode' => '791130'],
                ['area' => 'kangku', 'pincode' => '791131'],
                ['area' => 'koyu', 'pincode' => '791132']
            ],
            'kra-daadi' => [
                ['area' => 'jamin', 'pincode' => '791133'],
                ['area' => 'palin', 'pincode' => '791119'],
                ['area' => 'tali', 'pincode' => '791126'],
                ['area' => 'yangte', 'pincode' => '791134']
            ],
            'pakke-kessang' => [
                ['area' => 'lemmi', 'pincode' => '790110'],
                ['area' => 'seijosa', 'pincode' => '790111'],
                ['area' => 'pakke', 'pincode' => '790104'],
                ['area' => 'khenewa', 'pincode' => '790112']
            ],
            'shi-yomi' => [
                ['area' => 'tato', 'pincode' => '791135'],
                ['area' => 'mechuka', 'pincode' => '791136'],
                ['area' => 'pidi', 'pincode' => '791137'],
                ['area' => 'manigong', 'pincode' => '791138']
            ],
            'siang' => [
                ['area' => 'pangin', 'pincode' => '791139'],
                ['area' => 'kaying', 'pincode' => '791140'],
                ['area' => 'rumgong', 'pincode' => '791141'],
                ['area' => 'boleng', 'pincode' => '791142']
            ],
            'lepa-rada' => [
                ['area' => 'basar', 'pincode' => '791101'],
                ['area' => 'daring', 'pincode' => '791143'],
                ['area' => 'leparada', 'pincode' => '791144'],
                ['area' => 'likha-pakha', 'pincode' => '791145']
            ],
            'kamle' => [
                ['area' => 'raga', 'pincode' => '791146'],
                ['area' => 'bameng', 'pincode' => '791147'],
                ['area' => 'dollungmukh', 'pincode' => '791148'],
                ['area' => 'puchi-geko', 'pincode' => '791149']
            ]
        ],
        'assam' => [
            'baksa' => [
                ['area' => 'mushalpur', 'pincode' => '781372'],
                ['area' => 'barama', 'pincode' => '781346'],
                ['area' => 'tamulpur', 'pincode' => '781367'],
                ['area' => 'jalah', 'pincode' => '781372']
            ],
            'barpeta' => [
                ['area' => 'barpeta', 'pincode' => '781301'],
                ['area' => 'bajali', 'pincode' => '781325'],
                ['area' => 'howly', 'pincode' => '781316'],
                ['area' => 'mandia', 'pincode' => '781313']
            ],
            'bongaigaon' => [
                ['area' => 'bongaigaon', 'pincode' => '783380'],
                ['area' => 'abhayapuri', 'pincode' => '783384'],
                ['area' => 'bijni', 'pincode' => '783390'],
                ['area' => 'chapaguri', 'pincode' => '783393']
            ],
            'cachar' => [
                ['area' => 'silchar', 'pincode' => '788001'],
                ['area' => 'karimganj', 'pincode' => '788710'],
                ['area' => 'hailakandi', 'pincode' => '788151'],
                ['area' => 'lakhipur', 'pincode' => '788103']
            ],
            'dibrugarh' => [
                ['area' => 'dibrugarh', 'pincode' => '786001'],
                ['area' => 'duliajan', 'pincode' => '786602'],
                ['area' => 'tinsukia', 'pincode' => '786125'],
                ['area' => 'chabua', 'pincode' => '786184']
            ],
            'guwahati' => [
                ['area' => 'guwahati', 'pincode' => '781001'],
                ['area' => 'dispur', 'pincode' => '781006'],
                ['area' => 'panbazar', 'pincode' => '781001'],
                ['area' => 'paltan-bazaar', 'pincode' => '781008']
            ],
            'kamrup' => [
                ['area' => 'rangia', 'pincode' => '781354'],
                ['area' => 'hajo', 'pincode' => '781102'],
                ['area' => 'chamaria', 'pincode' => '781123'],
                ['area' => 'kamalpur', 'pincode' => '781365']
            ],
            'kamrup-metropolitan' => [
                ['area' => 'guwahati-north', 'pincode' => '781012'],
                ['area' => 'guwahati-south', 'pincode' => '781003'],
                ['area' => 'azara', 'pincode' => '781017'],
                ['area' => 'jalukbari', 'pincode' => '781014']
            ],
            'chirang' => [
                ['area' => 'bijni', 'pincode' => '783390'],
                ['area' => 'sidli', 'pincode' => '783392'],
                ['area' => 'borobazar', 'pincode' => '783393'],
                ['area' => 'basugaon', 'pincode' => '783372']
            ],
            'darrang' => [
                ['area' => 'mangaldoi', 'pincode' => '784125'],
                ['area' => 'sipajhar', 'pincode' => '784145'],
                ['area' => 'kalaigaon', 'pincode' => '784522'],
                ['area' => 'dalgaon', 'pincode' => '784116']
            ],
            'dhemaji' => [
                ['area' => 'dhemaji', 'pincode' => '787057'],
                ['area' => 'jonai', 'pincode' => '787060'],
                ['area' => 'silapathar', 'pincode' => '787059'],
                ['area' => 'gogamukh', 'pincode' => '787034']
            ],
            'dhubri' => [
                ['area' => 'dhubri', 'pincode' => '783324'],
                ['area' => 'gauripur', 'pincode' => '783331'],
                ['area' => 'bilasipara', 'pincode' => '783348'],
                ['area' => 'golakganj', 'pincode' => '783334']
            ],
            'goalpara' => [
                ['area' => 'goalpara', 'pincode' => '783121'],
                ['area' => 'dudhnoi', 'pincode' => '783124'],
                ['area' => 'lakhipur', 'pincode' => '783129'],
                ['area' => 'jaleswar', 'pincode' => '783123']
            ],
            'golaghat' => [
                ['area' => 'golaghat', 'pincode' => '785621'],
                ['area' => 'bokakhat', 'pincode' => '785612'],
                ['area' => 'sarupathar', 'pincode' => '785601'],
                ['area' => 'dergaon', 'pincode' => '785614']
            ],
            'hailakandi' => [
                ['area' => 'hailakandi', 'pincode' => '788151'],
                ['area' => 'katlicherra', 'pincode' => '788815'],
                ['area' => 'lala', 'pincode' => '788160'],
                ['area' => 'algapur', 'pincode' => '788165']
            ],
            'jorhat' => [
                ['area' => 'jorhat', 'pincode' => '785001'],
                ['area' => 'mariani', 'pincode' => '785634'],
                ['area' => 'titabor', 'pincode' => '785630'],
                ['area' => 'teok', 'pincode' => '785112']
            ],
            'karbi-anglong' => [
                ['area' => 'diphu', 'pincode' => '782460'],
                ['area' => 'bokajan', 'pincode' => '782480'],
                ['area' => 'hamren', 'pincode' => '782481'],
                ['area' => 'howraghat', 'pincode' => '782441']
            ],
            'karimganj' => [
                ['area' => 'karimganj', 'pincode' => '788710'],
                ['area' => 'patharkandi', 'pincode' => '788724'],
                ['area' => 'badarpur', 'pincode' => '788806'],
                ['area' => 'ramkrishna-nagar', 'pincode' => '788727']
            ],
            'kokrajhar' => [
                ['area' => 'kokrajhar', 'pincode' => '783370'],
                ['area' => 'gossaigaon', 'pincode' => '783360'],
                ['area' => 'dotma', 'pincode' => '783361'],
                ['area' => 'boko', 'pincode' => '781123']
            ],
            'lakhimpur' => [
                ['area' => 'north-lakhimpur', 'pincode' => '787001'],
                ['area' => 'dhakuakhana', 'pincode' => '787055'],
                ['area' => 'narayanpur', 'pincode' => '787052'],
                ['area' => 'bihpuria', 'pincode' => '784161']
            ],
            'majuli' => [
                ['area' => 'garamur', 'pincode' => '785104'],
                ['area' => 'kamalabari', 'pincode' => '785106'],
                ['area' => 'jengraimukh', 'pincode' => '785107'],
                ['area' => 'ujani-majuli', 'pincode' => '785108']
            ],
            'morigaon' => [
                ['area' => 'morigaon', 'pincode' => '782105'],
                ['area' => 'jagiroad', 'pincode' => '782410'],
                ['area' => 'laharighat', 'pincode' => '782101'],
                ['area' => 'moirabari', 'pincode' => '782106']
            ],
            'nagaon' => [
                ['area' => 'nagaon', 'pincode' => '782001'],
                ['area' => 'hojai', 'pincode' => '782435'],
                ['area' => 'lumding', 'pincode' => '782447'],
                ['area' => 'lanka', 'pincode' => '782446']
            ],
            'nalbari' => [
                ['area' => 'nalbari', 'pincode' => '781335'],
                ['area' => 'tihu', 'pincode' => '781371'],
                ['area' => 'barkhetri', 'pincode' => '781352'],
                ['area' => 'ghograpar', 'pincode' => '781366']
            ],
            'dima-hasao' => [
                ['area' => 'haflong', 'pincode' => '788819'],
                ['area' => 'maibang', 'pincode' => '788820'],
                ['area' => 'mahur', 'pincode' => '788830'],
                ['area' => 'umrangso', 'pincode' => '788931']
            ],
            'sivasagar' => [
                ['area' => 'sivasagar', 'pincode' => '785640'],
                ['area' => 'nazira', 'pincode' => '785685'],
                ['area' => 'amguri', 'pincode' => '785680'],
                ['area' => 'sonari', 'pincode' => '785690']
            ],
            'sonitpur' => [
                ['area' => 'tezpur', 'pincode' => '784001'],
                ['area' => 'biswanath-chariali', 'pincode' => '784176'],
                ['area' => 'gohpur', 'pincode' => '784168'],
                ['area' => 'dhekiajuli', 'pincode' => '784110']
            ],
            'south-salmara-mankachar' => [
                ['area' => 'mankachar', 'pincode' => '783131'],
                ['area' => 'south-salmara', 'pincode' => '783127'],
                ['area' => 'hatsingimari', 'pincode' => '783135'],
                ['area' => 'manikganj', 'pincode' => '783128']
            ],
            'tinsukia' => [
                ['area' => 'tinsukia', 'pincode' => '786125'],
                ['area' => 'margherita', 'pincode' => '786181'],
                ['area' => 'digboi', 'pincode' => '786171'],
                ['area' => 'sadiya', 'pincode' => '786157']
            ],
            'udalguri' => [
                ['area' => 'udalguri', 'pincode' => '784509'],
                ['area' => 'bhergaon', 'pincode' => '784161'],
                ['area' => 'rowta', 'pincode' => '784110'],
                ['area' => 'tangla', 'pincode' => '784521']
            ],
            'west-karbi-anglong' => [
                ['area' => 'hamren', 'pincode' => '782481'],
                ['area' => 'baithalangso', 'pincode' => '782490'],
                ['area' => 'donkamokam', 'pincode' => '782485'],
                ['area' => 'bokolia', 'pincode' => '782484']
            ],
            'biswanath' => [
                ['area' => 'biswanath-chariali', 'pincode' => '784176'],
                ['area' => 'behali', 'pincode' => '784178'],
                ['area' => 'gohpur', 'pincode' => '784168'],
                ['area' => 'sootea', 'pincode' => '784175']
            ],
            'charaideo' => [
                ['area' => 'sonari', 'pincode' => '785690'],
                ['area' => 'moran', 'pincode' => '785675'],
                ['area' => 'chabua', 'pincode' => '786184'],
                ['area' => 'sapekhati', 'pincode' => '785691']
            ],
            'hojai' => [
                ['area' => 'hojai', 'pincode' => '782435'],
                ['area' => 'doboka', 'pincode' => '782440'],
                ['area' => 'lumding', 'pincode' => '782447'],
                ['area' => 'udali', 'pincode' => '782441']
            ],
            'bajali' => [
                ['area' => 'pathsala', 'pincode' => '781325'],
                ['area' => 'sarthebari', 'pincode' => '781350'],
                ['area' => 'patacharkuchi', 'pincode' => '781326'],
                ['area' => 'bhawanipur', 'pincode' => '781352']
            ],
            'tamulpur' => [
                ['area' => 'tamulpur', 'pincode' => '781367'],
                ['area' => 'kalaigaon', 'pincode' => '784522'],
                ['area' => 'rangapara', 'pincode' => '784505'],
                ['area' => 'dimakuchi', 'pincode' => '784525']
            ]
        ],
        'bihar' => [
            'patna' => [
                ['area' => 'patna', 'pincode' => '800001'],
                ['area' => 'boring-road', 'pincode' => '800001'],
                ['area' => 'kankarbagh', 'pincode' => '800020'],
                ['area' => 'danapur', 'pincode' => '801503'],
                ['area' => 'phulwari-sharif', 'pincode' => '801505']
            ],
            'gaya' => [
                ['area' => 'gaya', 'pincode' => '823001'],
                ['area' => 'bodh-gaya', 'pincode' => '824231'],
                ['area' => 'sherghati', 'pincode' => '824211'],
                ['area' => 'tekari', 'pincode' => '824236']
            ],
            'muzaffarpur' => [
                ['area' => 'muzaffarpur', 'pincode' => '842001'],
                ['area' => 'sitamarhi', 'pincode' => '843301'],
                ['area' => 'sheohar', 'pincode' => '843329'],
                ['area' => 'vaishali', 'pincode' => '844101']
            ],
            'bhagalpur' => [
                ['area' => 'bhagalpur', 'pincode' => '812001'],
                ['area' => 'kahalgaon', 'pincode' => '813203'],
                ['area' => 'naugachia', 'pincode' => '853204'],
                ['area' => 'sultanganj', 'pincode' => '813213']
            ],
            'darbhanga' => [
                ['area' => 'darbhanga', 'pincode' => '846004'],
                ['area' => 'laheriasarai', 'pincode' => '846001'],
                ['area' => 'keoti', 'pincode' => '846005'],
                ['area' => 'manigachhi', 'pincode' => '846006']
            ],
            'nalanda' => [
                ['area' => 'bihar-sharif', 'pincode' => '803101'],
                ['area' => 'rajgir', 'pincode' => '803116'],
                ['area' => 'hilsa', 'pincode' => '801302'],
                ['area' => 'biharsharif', 'pincode' => '803101']
            ],
            'nawada' => [
                ['area' => 'nawada', 'pincode' => '805110'],
                ['area' => 'hisua', 'pincode' => '805128'],
                ['area' => 'rajauli', 'pincode' => '805126'],
                ['area' => 'warisaliganj', 'pincode' => '805130']
            ],
            'aurangabad' => [
                ['area' => 'aurangabad', 'pincode' => '824101'],
                ['area' => 'daudnagar', 'pincode' => '824113'],
                ['area' => 'obra', 'pincode' => '824124'],
                ['area' => 'rafiganj', 'pincode' => '824125']
            ],
            'rohtas' => [
                ['area' => 'sasaram', 'pincode' => '821115'],
                ['area' => 'dehri', 'pincode' => '821307'],
                ['area' => 'bikramganj', 'pincode' => '802212'],
                ['area' => 'nokha', 'pincode' => '821303']
            ],
            'kaimur' => [
                ['area' => 'bhabua', 'pincode' => '821101'],
                ['area' => 'mohania', 'pincode' => '821109'],
                ['area' => 'chainpur', 'pincode' => '821104'],
                ['area' => 'ramgarh', 'pincode' => '821107']
            ],
            'buxar' => [
                ['area' => 'buxar', 'pincode' => '802101'],
                ['area' => 'dumraon', 'pincode' => '802119'],
                ['area' => 'rajpur', 'pincode' => '802312'],
                ['area' => 'brahmpur', 'pincode' => '802114']
            ],
            'bhojpur' => [
                ['area' => 'arrah', 'pincode' => '802301'],
                ['area' => 'jagdispur', 'pincode' => '802158'],
                ['area' => 'piro', 'pincode' => '802207'],
                ['area' => 'sandesh', 'pincode' => '802213']
            ],
            'saran' => [
                ['area' => 'chhapra', 'pincode' => '841301'],
                ['area' => 'marhaura', 'pincode' => '841226'],
                ['area' => 'amnour', 'pincode' => '841201'],
                ['area' => 'revelganj', 'pincode' => '841222']
            ],
            'siwan' => [
                ['area' => 'siwan', 'pincode' => '841226'],
                ['area' => 'maharajganj', 'pincode' => '841238'],
                ['area' => 'darauli', 'pincode' => '841234'],
                ['area' => 'raghunathpur', 'pincode' => '841427']
            ],
            'gopalganj' => [
                ['area' => 'gopalganj', 'pincode' => '841428'],
                ['area' => 'barauli', 'pincode' => '841423'],
                ['area' => 'hathwa', 'pincode' => '841440'],
                ['area' => 'kuchaikote', 'pincode' => '841436']
            ],
            'east-champaran' => [
                ['area' => 'motihari', 'pincode' => '845401'],
                ['area' => 'raxaul', 'pincode' => '845305'],
                ['area' => 'dhaka', 'pincode' => '845418'],
                ['area' => 'areraj', 'pincode' => '845412']
            ],
            'west-champaran' => [
                ['area' => 'bettiah', 'pincode' => '845438'],
                ['area' => 'narkatiaganj', 'pincode' => '845455'],
                ['area' => 'bagaha', 'pincode' => '845101'],
                ['area' => 'ramnagar', 'pincode' => '845106']
            ],
            'sitamarhi' => [
                ['area' => 'sitamarhi', 'pincode' => '843302'],
                ['area' => 'pupri', 'pincode' => '843320'],
                ['area' => 'bairgania', 'pincode' => '843313'],
                ['area' => 'dumra', 'pincode' => '843334']
            ],
            'sheohar' => [
                ['area' => 'sheohar', 'pincode' => '843329'],
                ['area' => 'dumri-katsari', 'pincode' => '843328'],
                ['area' => 'tariyani', 'pincode' => '843326'],
                ['area' => 'piprahi', 'pincode' => '843331']
            ],
            'vaishali' => [
                ['area' => 'hajipur', 'pincode' => '844101'],
                ['area' => 'mahua', 'pincode' => '844122'],
                ['area' => 'desri', 'pincode' => '844114'],
                ['area' => 'lalganj', 'pincode' => '844121']
            ],
            'samastipur' => [
                ['area' => 'samastipur', 'pincode' => '848101'],
                ['area' => 'dalsinghsarai', 'pincode' => '848114'],
                ['area' => 'rosera', 'pincode' => '848210'],
                ['area' => 'patori', 'pincode' => '848202']
            ],
            'begusarai' => [
                ['area' => 'begusarai', 'pincode' => '851101'],
                ['area' => 'barauni', 'pincode' => '851112'],
                ['area' => 'khudra', 'pincode' => '851102'],
                ['area' => 'teghra', 'pincode' => '851215']
            ],
            'khagaria' => [
                ['area' => 'khagaria', 'pincode' => '851204'],
                ['area' => 'beldaur', 'pincode' => '851205'],
                ['area' => 'gogri', 'pincode' => '851213'],
                ['area' => 'parbatta', 'pincode' => '851202']
            ],
            'madhubani' => [
                ['area' => 'madhubani', 'pincode' => '847211'],
                ['area' => 'jhanjharpur', 'pincode' => '847404'],
                ['area' => 'benipatti', 'pincode' => '847223'],
                ['area' => 'phulparas', 'pincode' => '847230']
            ],
            'supaul' => [
                ['area' => 'supaul', 'pincode' => '852131'],
                ['area' => 'nirmali', 'pincode' => '852161'],
                ['area' => 'birpur', 'pincode' => '852138'],
                ['area' => 'triveniganj', 'pincode' => '852139']
            ],
            'saharsa' => [
                ['area' => 'saharsa', 'pincode' => '852201'],
                ['area' => 'simri-bakhtiarpur', 'pincode' => '852128'],
                ['area' => 'mahishi', 'pincode' => '852216'],
                ['area' => 'sonbarsa', 'pincode' => '852217']
            ],
            'madhepura' => [
                ['area' => 'madhepura', 'pincode' => '852113'],
                ['area' => 'murliganj', 'pincode' => '852122'],
                ['area' => 'singheshwar', 'pincode' => '852128'],
                ['area' => 'uda-kishanganj', 'pincode' => '852130']
            ],
            'purnia' => [
                ['area' => 'purnia', 'pincode' => '854301'],
                ['area' => 'dhamdaha', 'pincode' => '854204'],
                ['area' => 'kasba', 'pincode' => '854330'],
                ['area' => 'barhara-kothi', 'pincode' => '854333']
            ],
            'katihar' => [
                ['area' => 'katihar', 'pincode' => '854105'],
                ['area' => 'manihari', 'pincode' => '854113'],
                ['area' => 'barari', 'pincode' => '854203'],
                ['area' => 'barsoi', 'pincode' => '855101']
            ],
            'araria' => [
                ['area' => 'araria', 'pincode' => '854311'],
                ['area' => 'forbesganj', 'pincode' => '854318'],
                ['area' => 'raniganj', 'pincode' => '854334'],
                ['area' => 'narpatganj', 'pincode' => '854335']
            ],
            'kishanganj' => [
                ['area' => 'kishanganj', 'pincode' => '855107'],
                ['area' => 'bahadurganj', 'pincode' => '855101'],
                ['area' => 'thakurganj', 'pincode' => '855116'],
                ['area' => 'kochadhaman', 'pincode' => '855102']
            ],
            'munger' => [
                ['area' => 'munger', 'pincode' => '811201'],
                ['area' => 'jamalpur', 'pincode' => '811214'],
                ['area' => 'tarapur', 'pincode' => '811106'],
                ['area' => 'kharagpur', 'pincode' => '811210']
            ],
            'lakhisarai' => [
                ['area' => 'lakhisarai', 'pincode' => '811311'],
                ['area' => 'halsi', 'pincode' => '811302'],
                ['area' => 'ramgarh-chowk', 'pincode' => '811316'],
                ['area' => 'surajgarha', 'pincode' => '811312']
            ],
            'sheikhpura' => [
                ['area' => 'sheikhpura', 'pincode' => '811105'],
                ['area' => 'barbigha', 'pincode' => '811101'],
                ['area' => 'chewara', 'pincode' => '811102'],
                ['area' => 'shekhopur-sarai', 'pincode' => '811106']
            ],
            'jamui' => [
                ['area' => 'jamui', 'pincode' => '811307'],
                ['area' => 'jhajha', 'pincode' => '811308'],
                ['area' => 'sikandra', 'pincode' => '811105'],
                ['area' => 'lakshmipur', 'pincode' => '811313']
            ],
            'banka' => [
                ['area' => 'banka', 'pincode' => '813102'],
                ['area' => 'katoria', 'pincode' => '813107'],
                ['area' => 'amarpur', 'pincode' => '813105'],
                ['area' => 'rajaun', 'pincode' => '813108']
            ],
            'arwal' => [
                ['area' => 'arwal', 'pincode' => '804401'],
                ['area' => 'karpi', 'pincode' => '804403'],
                ['area' => 'kaler', 'pincode' => '804405'],
                ['area' => 'kurtha', 'pincode' => '804453']
            ],
            'jehanabad' => [
                ['area' => 'jehanabad', 'pincode' => '804408'],
                ['area' => 'ghoshi', 'pincode' => '804452'],
                ['area' => 'makhdumpur', 'pincode' => '804417'],
                ['area' => 'kako', 'pincode' => '804424']
            ]
        ],
        'chhattisgarh' => [
            'raipur' => [
                ['area' => 'raipur', 'pincode' => '492001'],
                ['area' => 'new-raipur', 'pincode' => '492002'],
                ['area' => 'shankar-nagar', 'pincode' => '492007'],
                ['area' => 'devendra-nagar', 'pincode' => '492004']
            ],
            'bilaspur' => [
                ['area' => 'bilaspur', 'pincode' => '495001'],
                ['area' => 'korba', 'pincode' => '495677'],
                ['area' => 'raigarh', 'pincode' => '496001'],
                ['area' => 'champa', 'pincode' => '495671']
            ],
            'durg' => [
                ['area' => 'durg', 'pincode' => '491001'],
                ['area' => 'bhilai', 'pincode' => '490001'],
                ['area' => 'rajnandgaon', 'pincode' => '491441'],
                ['area' => 'dhamtari', 'pincode' => '493773']
            ],
            'bastar' => [
                ['area' => 'jagdalpur', 'pincode' => '494001'],
                ['area' => 'kanker', 'pincode' => '494334'],
                ['area' => 'dantewada', 'pincode' => '494449'],
                ['area' => 'narayanpur', 'pincode' => '494661']
            ],
            'korba' => [
                ['area' => 'korba', 'pincode' => '495677'],
                ['area' => 'katghora', 'pincode' => '495445'],
                ['area' => 'pali', 'pincode' => '495557'],
                ['area' => 'kartala', 'pincode' => '495559']
            ],
            'raigarh' => [
                ['area' => 'raigarh', 'pincode' => '496001'],
                ['area' => 'sarangarh', 'pincode' => '496445'],
                ['area' => 'gharghoda', 'pincode' => '496111'],
                ['area' => 'kharsia', 'pincode' => '496661']
            ],
            'janjgir-champa' => [
                ['area' => 'janjgir', 'pincode' => '495668'],
                ['area' => 'champa', 'pincode' => '495671'],
                ['area' => 'akaltara', 'pincode' => '495552'],
                ['area' => 'malkharoda', 'pincode' => '495559']
            ],
            'rajnandgaon' => [
                ['area' => 'rajnandgaon', 'pincode' => '491441'],
                ['area' => 'dongargaon', 'pincode' => '491445'],
                ['area' => 'chhuikhadan', 'pincode' => '491558'],
                ['area' => 'ambagarh-chowki', 'pincode' => '491665']
            ],
            'balod' => [
                ['area' => 'balod', 'pincode' => '491226'],
                ['area' => 'gurur', 'pincode' => '491228'],
                ['area' => 'gunderdehi', 'pincode' => '491227'],
                ['area' => 'dondilohara', 'pincode' => '491222']
            ],
            'bemetara' => [
                ['area' => 'bemetara', 'pincode' => '491335'],
                ['area' => 'nawagarh', 'pincode' => '491340'],
                ['area' => 'saja', 'pincode' => '493559'],
                ['area' => 'berla', 'pincode' => '491332']
            ],
            'baloda-bazar' => [
                ['area' => 'baloda-bazar', 'pincode' => '493332'],
                ['area' => 'bhatapara', 'pincode' => '493118'],
                ['area' => 'simga', 'pincode' => '493101'],
                ['area' => 'palari', 'pincode' => '493228']
            ],
            'gariaband' => [
                ['area' => 'gariaband', 'pincode' => '493889'],
                ['area' => 'chhura', 'pincode' => '493885'],
                ['area' => 'fingeshwar', 'pincode' => '493888'],
                ['area' => 'deobhog', 'pincode' => '493881']
            ],
            'mahasamund' => [
                ['area' => 'mahasamund', 'pincode' => '493445'],
                ['area' => 'bagbahra', 'pincode' => '493449'],
                ['area' => 'saraipali', 'pincode' => '493558'],
                ['area' => 'basna', 'pincode' => '493555']
            ],
            'dhamtari' => [
                ['area' => 'dhamtari', 'pincode' => '493773'],
                ['area' => 'kurud', 'pincode' => '493663'],
                ['area' => 'nagri', 'pincode' => '493776'],
                ['area' => 'magarlod', 'pincode' => '493778']
            ],
            'kanker' => [
                ['area' => 'kanker', 'pincode' => '494334'],
                ['area' => 'narharpur', 'pincode' => '494771'],
                ['area' => 'antagarh', 'pincode' => '494665'],
                ['area' => 'bhanupratappur', 'pincode' => '494635']
            ],
            'kondagaon' => [
                ['area' => 'kondagaon', 'pincode' => '494226'],
                ['area' => 'keshkal', 'pincode' => '494222'],
                ['area' => 'makdi', 'pincode' => '494223'],
                ['area' => 'farasgaon', 'pincode' => '494228']
            ],
            'narayanpur' => [
                ['area' => 'narayanpur', 'pincode' => '494661'],
                ['area' => 'orchha', 'pincode' => '494665'],
                ['area' => 'abujhmarh', 'pincode' => '494661'],
                ['area' => 'kohkameta', 'pincode' => '494661']
            ],
            'dantewada' => [
                ['area' => 'dantewada', 'pincode' => '494449'],
                ['area' => 'geedam', 'pincode' => '494441'],
                ['area' => 'katekalyan', 'pincode' => '494556'],
                ['area' => 'barsur', 'pincode' => '494551']
            ],
            'bijapur' => [
                ['area' => 'bijapur', 'pincode' => '494222'],
                ['area' => 'bhairamgarh', 'pincode' => '494776'],
                ['area' => 'usoor', 'pincode' => '494223'],
                ['area' => 'bhopalpatnam', 'pincode' => '494444']
            ],
            'sukma' => [
                ['area' => 'sukma', 'pincode' => '494111'],
                ['area' => 'konta', 'pincode' => '494114'],
                ['area' => 'chhindgarh', 'pincode' => '494115'],
                ['area' => 'dornapal', 'pincode' => '494113']
            ],
            'mungeli' => [
                ['area' => 'mungeli', 'pincode' => '495334'],
                ['area' => 'lormi', 'pincode' => '495115'],
                ['area' => 'patharia', 'pincode' => '495551'],
                ['area' => 'takhatpur', 'pincode' => '495330']
            ],
            'gaurela-pendra-marwahi' => [
                ['area' => 'pendra', 'pincode' => '495119'],
                ['area' => 'marwahi', 'pincode' => '495118'],
                ['area' => 'gaurela', 'pincode' => '495117'],
                ['area' => 'kenda', 'pincode' => '495116']
            ],
            'jashpur' => [
                ['area' => 'jashpur', 'pincode' => '496331'],
                ['area' => 'kunkuri', 'pincode' => '496225'],
                ['area' => 'pathalgaon', 'pincode' => '496118'],
                ['area' => 'bagicha', 'pincode' => '496224']
            ],
            'surguja' => [
                ['area' => 'ambikapur', 'pincode' => '497001'],
                ['area' => 'sitapur', 'pincode' => '497111'],
                ['area' => 'lakhanpur', 'pincode' => '497116'],
                ['area' => 'ramanujganj', 'pincode' => '497220']
            ],
            'surajpur' => [
                ['area' => 'surajpur', 'pincode' => '497229'],
                ['area' => 'premnagar', 'pincode' => '497235'],
                ['area' => 'bhaiyathan', 'pincode' => '497226'],
                ['area' => 'pratappur', 'pincode' => '497223']
            ],
            'balrampur' => [
                ['area' => 'balrampur', 'pincode' => '497119'],
                ['area' => 'ramanujnagar', 'pincode' => '497118'],
                ['area' => 'rajpur', 'pincode' => '497116'],
                ['area' => 'wadrafnagar', 'pincode' => '497223']
            ],
            'koriya' => [
                ['area' => 'baikunthpur', 'pincode' => '497335'],
                ['area' => 'manendragarh', 'pincode' => '497442'],
                ['area' => 'bharatpur', 'pincode' => '497339'],
                ['area' => 'sonhat', 'pincode' => '497449']
            ],
            'kawardha' => [
                ['area' => 'kawardha', 'pincode' => '491995'],
                ['area' => 'pandariya', 'pincode' => '491559'],
                ['area' => 'bodla', 'pincode' => '491888'],
                ['area' => 'sahaspur-lohara', 'pincode' => '491888']
            ],
            'mohla-manpur' => [
                ['area' => 'mohla', 'pincode' => '491770'],
                ['area' => 'manpur', 'pincode' => '491668'],
                ['area' => 'rajpur', 'pincode' => '491776'],
                ['area' => 'bhopalpatnam', 'pincode' => '491669']
            ],
            'balrampur-ramanujganj' => [
                ['area' => 'ramanujganj', 'pincode' => '497220'],
                ['area' => 'rajpur', 'pincode' => '497224'],
                ['area' => 'kusmi', 'pincode' => '497225'],
                ['area' => 'samri', 'pincode' => '497226']
            ],
            'sakti' => [
                ['area' => 'sakti', 'pincode' => '495689'],
                ['area' => 'dabhra', 'pincode' => '495688'],
                ['area' => 'malkharoda', 'pincode' => '495559'],
                ['area' => 'jairamnagar', 'pincode' => '495557']
            ]
        ],
        'goa' => [
            'north-goa' => [
                ['area' => 'panaji', 'pincode' => '403001'],
                ['area' => 'mapusa', 'pincode' => '403507'],
                ['area' => 'calangute', 'pincode' => '403516'],
                ['area' => 'anjuna', 'pincode' => '403509'],
                ['area' => 'baga', 'pincode' => '403516'],
                ['area' => 'candolim', 'pincode' => '403515']
            ],
            'south-goa' => [
                ['area' => 'margao', 'pincode' => '403601'],
                ['area' => 'vasco-da-gama', 'pincode' => '403802'],
                ['area' => 'ponda', 'pincode' => '403401'],
                ['area' => 'quepem', 'pincode' => '403705'],
                ['area' => 'canacona', 'pincode' => '403702'],
                ['area' => 'sanguem', 'pincode' => '403704']
            ]
        ],
        'gujarat' => [
            'ahmedabad' => [
                ['area' => 'ahmedabad', 'pincode' => '380001'],
                ['area' => 'navrangpura', 'pincode' => '380009'],
                ['area' => 'satellite', 'pincode' => '380015'],
                ['area' => 'maninagar', 'pincode' => '380008'],
                ['area' => 'vastrapur', 'pincode' => '380015'],
                ['area' => 'bopal', 'pincode' => '380058']
            ],
            'surat' => [
                ['area' => 'surat', 'pincode' => '395001'],
                ['area' => 'adajan', 'pincode' => '395009'],
                ['area' => 'vesu', 'pincode' => '395007'],
                ['area' => 'katargam', 'pincode' => '395004'],
                ['area' => 'udhna', 'pincode' => '394210']
            ],
            'vadodara' => [
                ['area' => 'vadodara', 'pincode' => '390001'],
                ['area' => 'alkapuri', 'pincode' => '390007'],
                ['area' => 'gotri', 'pincode' => '390021'],
                ['area' => 'manjalpur', 'pincode' => '390011'],
                ['area' => 'karelibaug', 'pincode' => '390018']
            ],
            'rajkot' => [
                ['area' => 'rajkot', 'pincode' => '360001'],
                ['area' => 'kalawad-road', 'pincode' => '360005'],
                ['area' => 'mavdi', 'pincode' => '360004'],
                ['area' => 'university-road', 'pincode' => '360005']
            ],
            'gandhinagar' => [
                ['area' => 'gandhinagar', 'pincode' => '382010'],
                ['area' => 'sector-1', 'pincode' => '382001'],
                ['area' => 'sector-7', 'pincode' => '382007'],
                ['area' => 'adalaj', 'pincode' => '382421']
            ],
            'jamnagar' => [
                ['area' => 'jamnagar', 'pincode' => '361001'],
                ['area' => 'digvijay-plot', 'pincode' => '361005'],
                ['area' => 'bedi', 'pincode' => '361002'],
                ['area' => 'dwarka', 'pincode' => '361335']
            ],
            'bhavnagar' => [
                ['area' => 'bhavnagar', 'pincode' => '364001'],
                ['area' => 'waghawadi-road', 'pincode' => '364002'],
                ['area' => 'mahuva', 'pincode' => '364290'],
                ['area' => 'palitana', 'pincode' => '364270']
            ],
            'junagadh' => [
                ['area' => 'junagadh', 'pincode' => '362001'],
                ['area' => 'veraval', 'pincode' => '362265'],
                ['area' => 'manavadar', 'pincode' => '362630'],
                ['area' => 'keshod', 'pincode' => '362220']
            ],
            'amreli' => [
                ['area' => 'amreli', 'pincode' => '365601'],
                ['area' => 'dhari', 'pincode' => '365640'],
                ['area' => 'savarkundla', 'pincode' => '364515'],
                ['area' => 'bagasara', 'pincode' => '365440']
            ],
            'porbandar' => [
                ['area' => 'porbandar', 'pincode' => '360575'],
                ['area' => 'ranavav', 'pincode' => '360550'],
                ['area' => 'kutiyana', 'pincode' => '360510'],
                ['area' => 'chhaya', 'pincode' => '360520']
            ],
            'kutch' => [
                ['area' => 'bhuj', 'pincode' => '370001'],
                ['area' => 'gandhidham', 'pincode' => '370201'],
                ['area' => 'mundra', 'pincode' => '370421'],
                ['area' => 'anjar', 'pincode' => '370110']
            ],
            'mehsana' => [
                ['area' => 'mehsana', 'pincode' => '384001'],
                ['area' => 'patan', 'pincode' => '384265'],
                ['area' => 'unjha', 'pincode' => '384170'],
                ['area' => 'visnagar', 'pincode' => '384315']
            ],
            'banaskantha' => [
                ['area' => 'palanpur', 'pincode' => '385001'],
                ['area' => 'deesa', 'pincode' => '385535'],
                ['area' => 'danta', 'pincode' => '385110'],
                ['area' => 'tharad', 'pincode' => '385565']
            ],
            'sabarkantha' => [
                ['area' => 'himmatnagar', 'pincode' => '383001'],
                ['area' => 'idar', 'pincode' => '383430'],
                ['area' => 'prantij', 'pincode' => '383205'],
                ['area' => 'talod', 'pincode' => '383215']
            ],
            'panchmahal' => [
                ['area' => 'godhra', 'pincode' => '389001'],
                ['area' => 'halol', 'pincode' => '389350'],
                ['area' => 'lunawada', 'pincode' => '389230'],
                ['area' => 'kalol', 'pincode' => '389330']
            ],
            'dahod' => [
                ['area' => 'dahod', 'pincode' => '389151'],
                ['area' => 'limkheda', 'pincode' => '389180'],
                ['area' => 'devgadh-baria', 'pincode' => '389380'],
                ['area' => 'dhanpur', 'pincode' => '389210']
            ],
            'mahisagar' => [
                ['area' => 'lunawada', 'pincode' => '389230'],
                ['area' => 'kadana', 'pincode' => '389250'],
                ['area' => 'santrampur', 'pincode' => '389260'],
                ['area' => 'balasinor', 'pincode' => '388255']
            ],
            'anand' => [
                ['area' => 'anand', 'pincode' => '388001'],
                ['area' => 'vidyanagar', 'pincode' => '388121'],
                ['area' => 'khambhat', 'pincode' => '388620'],
                ['area' => 'umreth', 'pincode' => '388220']
            ],
            'kheda' => [
                ['area' => 'nadiad', 'pincode' => '387001'],
                ['area' => 'kheda', 'pincode' => '387411'],
                ['area' => 'mahudha', 'pincode' => '387630'],
                ['area' => 'kapadvanj', 'pincode' => '387620']
            ],
            'aravalli' => [
                ['area' => 'modasa', 'pincode' => '383315'],
                ['area' => 'malpur', 'pincode' => '383345'],
                ['area' => 'bayad', 'pincode' => '383325'],
                ['area' => 'bhiloda', 'pincode' => '383245']
            ],
            'bharuch' => [
                ['area' => 'bharuch', 'pincode' => '392001'],
                ['area' => 'ankleshwar', 'pincode' => '393001'],
                ['area' => 'jambusar', 'pincode' => '392150'],
                ['area' => 'amod', 'pincode' => '392110']
            ],
            'narmada' => [
                ['area' => 'rajpipla', 'pincode' => '393145'],
                ['area' => 'dediapada', 'pincode' => '393040'],
                ['area' => 'sagbara', 'pincode' => '393030'],
                ['area' => 'tilakwada', 'pincode' => '393001']
            ],
            'navsari' => [
                ['area' => 'navsari', 'pincode' => '396445'],
                ['area' => 'chikhli', 'pincode' => '396521'],
                ['area' => 'vansda', 'pincode' => '396580'],
                ['area' => 'jalalpore', 'pincode' => '396445']
            ],
            'tapi' => [
                ['area' => 'vyara', 'pincode' => '394650'],
                ['area' => 'songadh', 'pincode' => '394670'],
                ['area' => 'uchchhal', 'pincode' => '394641'],
                ['area' => 'valod', 'pincode' => '394641']
            ],
            'dang' => [
                ['area' => 'ahwa', 'pincode' => '394710'],
                ['area' => 'waghai', 'pincode' => '394730'],
                ['area' => 'subir', 'pincode' => '394716'],
                ['area' => 'saputara', 'pincode' => '394720']
            ],
            'valsad' => [
                ['area' => 'valsad', 'pincode' => '396001'],
                ['area' => 'vapi', 'pincode' => '396191'],
                ['area' => 'pardi', 'pincode' => '396125'],
                ['area' => 'umbergaon', 'pincode' => '396171']
            ],
            'surat-rural' => [
                ['area' => 'mangrol', 'pincode' => '394410'],
                ['area' => 'bardoli', 'pincode' => '394601'],
                ['area' => 'mandvi', 'pincode' => '394160'],
                ['area' => 'kamrej', 'pincode' => '394185']
            ],
            'gir-somnath' => [
                ['area' => 'veraval', 'pincode' => '362266'],
                ['area' => 'una', 'pincode' => '362560'],
                ['area' => 'talala', 'pincode' => '362150'],
                ['area' => 'sutrapada', 'pincode' => '362275']
            ],
            'botad' => [
                ['area' => 'botad', 'pincode' => '364710'],
                ['area' => 'gadhada', 'pincode' => '364750'],
                ['area' => 'barvala', 'pincode' => '364730'],
                ['area' => 'ranpur', 'pincode' => '364150']
            ],
            'morbi' => [
                ['area' => 'morbi', 'pincode' => '363641'],
                ['area' => 'wankaner', 'pincode' => '363621'],
                ['area' => 'maliya', 'pincode' => '360410'],
                ['area' => 'tankara', 'pincode' => '363650']
            ],
            'devbhoomi-dwarka' => [
                ['area' => 'khambhalia', 'pincode' => '361305'],
                ['area' => 'dwarka', 'pincode' => '361335'],
                ['area' => 'kalyanpur', 'pincode' => '361160'],
                ['area' => 'bhanvad', 'pincode' => '360510']
            ]
        ],
        'haryana' => [
            'gurugram' => [
                ['area' => 'gurugram', 'pincode' => '122001'],
                ['area' => 'cyber-city', 'pincode' => '122002'],
                ['area' => 'mg-road', 'pincode' => '122001'],
                ['area' => 'sector-14', 'pincode' => '122001'],
                ['area' => 'dlf-phase-1', 'pincode' => '122002']
            ],
            'faridabad' => [
                ['area' => 'faridabad', 'pincode' => '121001'],
                ['area' => 'sector-15', 'pincode' => '121007'],
                ['area' => 'old-faridabad', 'pincode' => '121002'],
                ['area' => 'neelam-chowk', 'pincode' => '121003']
            ],
            'panipat' => [
                ['area' => 'panipat', 'pincode' => '132103'],
                ['area' => 'samalkha', 'pincode' => '132101'],
                ['area' => 'israna', 'pincode' => '132107'],
                ['area' => 'bapoli', 'pincode' => '132139']
            ],
            'ambala' => [
                ['area' => 'ambala', 'pincode' => '134001'],
                ['area' => 'ambala-city', 'pincode' => '134002'],
                ['area' => 'ambala-cantt', 'pincode' => '133001'],
                ['area' => 'naraingarh', 'pincode' => '134203']
            ],
            'sonipat' => [
                ['area' => 'sonipat', 'pincode' => '131001'],
                ['area' => 'gohana', 'pincode' => '131301'],
                ['area' => 'kharkhoda', 'pincode' => '131402'],
                ['area' => 'ganaur', 'pincode' => '131101']
            ],
            'rohtak' => [
                ['area' => 'rohtak', 'pincode' => '124001'],
                ['area' => 'meham', 'pincode' => '124112'],
                ['area' => 'kalanaur', 'pincode' => '124113'],
                ['area' => 'sampla', 'pincode' => '124001']
            ],
            'hisar' => [
                ['area' => 'hisar', 'pincode' => '125001'],
                ['area' => 'hansi', 'pincode' => '125033'],
                ['area' => 'adampur', 'pincode' => '125052'],
                ['area' => 'barwala', 'pincode' => '125121']
            ],
            'karnal' => [
                ['area' => 'karnal', 'pincode' => '132001'],
                ['area' => 'taraori', 'pincode' => '132116'],
                ['area' => 'assandh', 'pincode' => '132039'],
                ['area' => 'nilokheri', 'pincode' => '132117']
            ],
            'yamunanagar' => [
                ['area' => 'yamunanagar', 'pincode' => '135001'],
                ['area' => 'jagadhri', 'pincode' => '135003'],
                ['area' => 'chhachhrauli', 'pincode' => '135103'],
                ['area' => 'bilaspur', 'pincode' => '135102']
            ],
            'panchkula' => [
                ['area' => 'panchkula', 'pincode' => '134109'],
                ['area' => 'sector-5', 'pincode' => '134109'],
                ['area' => 'pinjore', 'pincode' => '134102'],
                ['area' => 'kalka', 'pincode' => '133302']
            ],
            'kurukshetra' => [
                ['area' => 'kurukshetra', 'pincode' => '136118'],
                ['area' => 'thanesar', 'pincode' => '136119'],
                ['area' => 'shahabad', 'pincode' => '136135'],
                ['area' => 'pehowa', 'pincode' => '136128']
            ],
            'kaithal' => [
                ['area' => 'kaithal', 'pincode' => '136027'],
                ['area' => 'kalayat', 'pincode' => '136117'],
                ['area' => 'pundri', 'pincode' => '136026'],
                ['area' => 'guhla', 'pincode' => '136034']
            ],
            'jind' => [
                ['area' => 'jind', 'pincode' => '126102'],
                ['area' => 'narwana', 'pincode' => '126116'],
                ['area' => 'safidon', 'pincode' => '126112'],
                ['area' => 'julana', 'pincode' => '126101']
            ],
            'sirsa' => [
                ['area' => 'sirsa', 'pincode' => '125055'],
                ['area' => 'ellenabad', 'pincode' => '125102'],
                ['area' => 'dabwali', 'pincode' => '125104'],
                ['area' => 'rania', 'pincode' => '125077']
            ],
            'fatehabad' => [
                ['area' => 'fatehabad', 'pincode' => '125050'],
                ['area' => 'tohana', 'pincode' => '125120'],
                ['area' => 'ratia', 'pincode' => '125051'],
                ['area' => 'bhuna', 'pincode' => '127028']
            ],
            'bhiwani' => [
                ['area' => 'bhiwani', 'pincode' => '127021'],
                ['area' => 'loharu', 'pincode' => '127201'],
                ['area' => 'siwani', 'pincode' => '127046'],
                ['area' => 'tosham', 'pincode' => '127040']
            ],
            'charkhi-dadri' => [
                ['area' => 'charkhi-dadri', 'pincode' => '127306'],
                ['area' => 'badhra', 'pincode' => '127308'],
                ['area' => 'bond-kalan', 'pincode' => '127309'],
                ['area' => 'jhojhu-kalan', 'pincode' => '127307']
            ],
            'mahendragarh' => [
                ['area' => 'narnaul', 'pincode' => '123001'],
                ['area' => 'mahendragarh', 'pincode' => '123029'],
                ['area' => 'kanina', 'pincode' => '123027'],
                ['area' => 'nangal-chaudhry', 'pincode' => '123024']
            ],
            'rewari' => [
                ['area' => 'rewari', 'pincode' => '123401'],
                ['area' => 'bawal', 'pincode' => '123501'],
                ['area' => 'kosli', 'pincode' => '123302'],
                ['area' => 'nahar', 'pincode' => '123110']
            ],
            'palwal' => [
                ['area' => 'palwal', 'pincode' => '121102'],
                ['area' => 'hodal', 'pincode' => '121106'],
                ['area' => 'hathin', 'pincode' => '121104'],
                ['area' => 'hassanpur', 'pincode' => '121107']
            ],
            'mewat' => [
                ['area' => 'nuh', 'pincode' => '122107'],
                ['area' => 'ferozepur-jhirka', 'pincode' => '122104'],
                ['area' => 'punhana', 'pincode' => '122108'],
                ['area' => 'tauru', 'pincode' => '122105']
            ],
            'jhajjar' => [
                ['area' => 'jhajjar', 'pincode' => '124103'],
                ['area' => 'bahadurgarh', 'pincode' => '124507'],
                ['area' => 'beri', 'pincode' => '124201'],
                ['area' => 'matanhail', 'pincode' => '124106']
            ]
        ],
        'himachal-pradesh' => [
            'shimla' => [
                ['area' => 'shimla', 'pincode' => '171001'],
                ['area' => 'mall-road', 'pincode' => '171001'],
                ['area' => 'sanjauli', 'pincode' => '171006'],
                ['area' => 'kufri', 'pincode' => '171012'],
                ['area' => 'mashobra', 'pincode' => '171007']
            ],
            'kangra' => [
                ['area' => 'dharamshala', 'pincode' => '176215'],
                ['area' => 'mcleodganj', 'pincode' => '176219'],
                ['area' => 'palampur', 'pincode' => '176061'],
                ['area' => 'kangra', 'pincode' => '176001']
            ],
            'kullu' => [
                ['area' => 'kullu', 'pincode' => '175101'],
                ['area' => 'manali', 'pincode' => '175131'],
                ['area' => 'bhuntar', 'pincode' => '175125'],
                ['area' => 'kasol', 'pincode' => '175105']
            ],
            'mandi' => [
                ['area' => 'mandi', 'pincode' => '175001'],
                ['area' => 'sundernagar', 'pincode' => '175018'],
                ['area' => 'jogindernagar', 'pincode' => '175015'],
                ['area' => 'karsog', 'pincode' => '175011']
            ],
            'una' => [
                ['area' => 'una', 'pincode' => '174303'],
                ['area' => 'amb', 'pincode' => '177203'],
                ['area' => 'gagret', 'pincode' => '177206'],
                ['area' => 'bangana', 'pincode' => '174305']
            ],
            'hamirpur' => [
                ['area' => 'hamirpur', 'pincode' => '177001'],
                ['area' => 'nadaun', 'pincode' => '177033'],
                ['area' => 'barsar', 'pincode' => '177001'],
                ['area' => 'sujanpur', 'pincode' => '176107']
            ],
            'bilaspur' => [
                ['area' => 'bilaspur', 'pincode' => '174001'],
                ['area' => 'ghumarwin', 'pincode' => '174021'],
                ['area' => 'jhandutta', 'pincode' => '174024'],
                ['area' => 'sadar', 'pincode' => '174013']
            ],
            'solan' => [
                ['area' => 'solan', 'pincode' => '173212'],
                ['area' => 'parwanoo', 'pincode' => '173220'],
                ['area' => 'nalagarh', 'pincode' => '174101'],
                ['area' => 'kandaghat', 'pincode' => '173215']
            ],
            'sirmaur' => [
                ['area' => 'nahan', 'pincode' => '173001'],
                ['area' => 'paonta-sahib', 'pincode' => '173025'],
                ['area' => 'rajgarh', 'pincode' => '173101'],
                ['area' => 'pachhad', 'pincode' => '173022']
            ],
            'chamba' => [
                ['area' => 'chamba', 'pincode' => '176310'],
                ['area' => 'dalhousie', 'pincode' => '176304'],
                ['area' => 'bharmour', 'pincode' => '176315'],
                ['area' => 'pangi', 'pincode' => '176320']
            ],
            'kinnaur' => [
                ['area' => 'reckong-peo', 'pincode' => '172107'],
                ['area' => 'kalpa', 'pincode' => '172108'],
                ['area' => 'sangla', 'pincode' => '172106'],
                ['area' => 'nichar', 'pincode' => '172110']
            ],
            'lahaul-spiti' => [
                ['area' => 'keylong', 'pincode' => '175132'],
                ['area' => 'udaipur', 'pincode' => '175129'],
                ['area' => 'kaza', 'pincode' => '172114'],
                ['area' => 'sissu', 'pincode' => '175142']
            ]
        ],
        'jharkhand' => [
            'ranchi' => [
                ['area' => 'ranchi', 'pincode' => '834001'],
                ['area' => 'lalpur', 'pincode' => '834001'],
                ['area' => 'kanke', 'pincode' => '834006'],
                ['area' => 'hatia', 'pincode' => '834003']
            ],
            'dhanbad' => [
                ['area' => 'dhanbad', 'pincode' => '826001'],
                ['area' => 'jharia', 'pincode' => '828111'],
                ['area' => 'sindri', 'pincode' => '828122'],
                ['area' => 'bokaro', 'pincode' => '827001']
            ],
            'jamshedpur' => [
                ['area' => 'jamshedpur', 'pincode' => '831001'],
                ['area' => 'sakchi', 'pincode' => '831001'],
                ['area' => 'bistupur', 'pincode' => '831001'],
                ['area' => 'golmuri', 'pincode' => '831003']
            ],
            'bokaro' => [
                ['area' => 'bokaro-steel-city', 'pincode' => '827001'],
                ['area' => 'chas', 'pincode' => '827013'],
                ['area' => 'phusro', 'pincode' => '829144'],
                ['area' => 'bermo', 'pincode' => '829104']
            ],
            'deoghar' => [
                ['area' => 'deoghar', 'pincode' => '814112'],
                ['area' => 'jasidih', 'pincode' => '814142'],
                ['area' => 'madhupur', 'pincode' => '815353'],
                ['area' => 'sarath', 'pincode' => '814155']
            ],
            'giridih' => [
                ['area' => 'giridih', 'pincode' => '815301'],
                ['area' => 'bengabad', 'pincode' => '815312'],
                ['area' => 'dumri', 'pincode' => '815312'],
                ['area' => 'tisri', 'pincode' => '815316']
            ],
            'hazaribagh' => [
                ['area' => 'hazaribagh', 'pincode' => '825301'],
                ['area' => 'ramgarh', 'pincode' => '829122'],
                ['area' => 'chatra', 'pincode' => '825401'],
                ['area' => 'barhi', 'pincode' => '825405']
            ],
            'ramgarh' => [
                ['area' => 'ramgarh', 'pincode' => '829122'],
                ['area' => 'mandu', 'pincode' => '829119'],
                ['area' => 'gola', 'pincode' => '829112'],
                ['area' => 'patratu', 'pincode' => '829143']
            ],
            'chatra' => [
                ['area' => 'chatra', 'pincode' => '825401'],
                ['area' => 'hunterganj', 'pincode' => '825406'],
                ['area' => 'tandwa', 'pincode' => '825319'],
                ['area' => 'simaria', 'pincode' => '825409']
            ],
            'koderma' => [
                ['area' => 'koderma', 'pincode' => '825409'],
                ['area' => 'jhumri-telaiya', 'pincode' => '825409'],
                ['area' => 'satgawan', 'pincode' => '825412'],
                ['area' => 'markacho', 'pincode' => '825410']
            ],
            'dumka' => [
                ['area' => 'dumka', 'pincode' => '814101'],
                ['area' => 'shikaripara', 'pincode' => '814112'],
                ['area' => 'maslia', 'pincode' => '814113'],
                ['area' => 'jarmundi', 'pincode' => '814117']
            ],
            'jamtara' => [
                ['area' => 'jamtara', 'pincode' => '815351'],
                ['area' => 'narayanpur', 'pincode' => '815352'],
                ['area' => 'kundhit', 'pincode' => '815353'],
                ['area' => 'nala', 'pincode' => '815354']
            ],
            'pakur' => [
                ['area' => 'pakur', 'pincode' => '816107'],
                ['area' => 'maheshpur', 'pincode' => '816106'],
                ['area' => 'pakuria', 'pincode' => '816109'],
                ['area' => 'amrapara', 'pincode' => '816108']
            ],
            'godda' => [
                ['area' => 'godda', 'pincode' => '814133'],
                ['area' => 'mahagama', 'pincode' => '814165'],
                ['area' => 'poreyahat', 'pincode' => '814153'],
                ['area' => 'pathargama', 'pincode' => '814151']
            ],
            'sahibganj' => [
                ['area' => 'sahibganj', 'pincode' => '816109'],
                ['area' => 'rajmahal', 'pincode' => '816108'],
                ['area' => 'barharwa', 'pincode' => '816101'],
                ['area' => 'taljhari', 'pincode' => '816103']
            ],
            'palamu' => [
                ['area' => 'daltonganj', 'pincode' => '822101'],
                ['area' => 'medininagar', 'pincode' => '822101'],
                ['area' => 'garhwa', 'pincode' => '822114'],
                ['area' => 'latehar', 'pincode' => '829206']
            ],
            'garhwa' => [
                ['area' => 'garhwa', 'pincode' => '822114'],
                ['area' => 'nagar-untari', 'pincode' => '822116'],
                ['area' => 'meral', 'pincode' => '822119'],
                ['area' => 'banshidhar-nagar', 'pincode' => '822120']
            ],
            'latehar' => [
                ['area' => 'latehar', 'pincode' => '829206'],
                ['area' => 'manika', 'pincode' => '822118'],
                ['area' => 'balumath', 'pincode' => '822114'],
                ['area' => 'chandwa', 'pincode' => '829203']
            ],
            'lohardaga' => [
                ['area' => 'lohardaga', 'pincode' => '835302'],
                ['area' => 'kuru', 'pincode' => '835325'],
                ['area' => 'senha', 'pincode' => '835303'],
                ['area' => 'bhandra', 'pincode' => '835325']
            ],
            'gumla' => [
                ['area' => 'gumla', 'pincode' => '835207'],
                ['area' => 'sisai', 'pincode' => '835221'],
                ['area' => 'basia', 'pincode' => '835210'],
                ['area' => 'kamdara', 'pincode' => '835229']
            ],
            'simdega' => [
                ['area' => 'simdega', 'pincode' => '835223'],
                ['area' => 'jaldega', 'pincode' => '835224'],
                ['area' => 'bolba', 'pincode' => '835226'],
                ['area' => 'kolebira', 'pincode' => '835227']
            ],
            'khunti' => [
                ['area' => 'khunti', 'pincode' => '835210'],
                ['area' => 'murhu', 'pincode' => '835213'],
                ['area' => 'torpa', 'pincode' => '835227'],
                ['area' => 'arki', 'pincode' => '835211']
            ],
            'seraikela-kharsawan' => [
                ['area' => 'seraikela', 'pincode' => '832403'],
                ['area' => 'kharsawan', 'pincode' => '832104'],
                ['area' => 'chandil', 'pincode' => '832401'],
                ['area' => 'adityapur', 'pincode' => '832109']
            ],
            'east-singhbhum' => [
                ['area' => 'jamshedpur-west', 'pincode' => '831004'],
                ['area' => 'jamshedpur-east', 'pincode' => '831012'],
                ['area' => 'chaibasa', 'pincode' => '833201'],
                ['area' => 'ghatsila', 'pincode' => '832303']
            ],
            'west-singhbhum' => [
                ['area' => 'chaibasa', 'pincode' => '833201'],
                ['area' => 'chakradharpur', 'pincode' => '833102'],
                ['area' => 'noamundi', 'pincode' => '833219'],
                ['area' => 'manoharpur', 'pincode' => '833104']
            ]
        ],
        'karnataka' => [
            'bengaluru-urban' => [
                ['area' => 'koramangala', 'pincode' => '560034'],
                ['area' => 'indiranagar', 'pincode' => '560038'],
                ['area' => 'mg-road', 'pincode' => '560001'],
                ['area' => 'whitefield', 'pincode' => '560066'],
                ['area' => 'electronic-city', 'pincode' => '560100'],
                ['area' => 'jayanagar', 'pincode' => '560011'],
                ['area' => 'rajajinagar', 'pincode' => '560010'],
                ['area' => 'malleswaram', 'pincode' => '560003'],
                ['area' => 'btm-layout', 'pincode' => '560029'],
                ['area' => 'hsr-layout', 'pincode' => '560102']
            ],
            'mysuru' => [
                ['area' => 'chamundi-hills', 'pincode' => '570010'],
                ['area' => 'gokulam', 'pincode' => '570002'],
                ['area' => 'jayanagar', 'pincode' => '570014'],
                ['area' => 'kuvempunagar', 'pincode' => '570023'],
                ['area' => 'vijayanagar', 'pincode' => '570017'],
                ['area' => 'hebbal', 'pincode' => '570016'],
                ['area' => 'nazarbad', 'pincode' => '570010'],
                ['area' => 'saraswathipuram', 'pincode' => '570009']
            ],
            'ballari' => [
                ['area' => 'cantonment', 'pincode' => '583101'],
                ['area' => 'gandhi-nagar', 'pincode' => '583103'],
                ['area' => 'kappagal-road', 'pincode' => '583104'],
                ['area' => 'rudrappa-camp', 'pincode' => '583105'],
                ['area' => 'kurugodu', 'pincode' => '583116'],
                ['area' => 'kampli', 'pincode' => '583132'],
                ['area' => 'siruguppa', 'pincode' => '583121'],
                ['area' => 'hospet', 'pincode' => '583201'],
                ['area' => 'hampi', 'pincode' => '583239'],
                ['area' => 'kudligi', 'pincode' => '583135'],
                ['area' => 'hagaribommanahalli', 'pincode' => '583212'],
                ['area' => 'kottur', 'pincode' => '583134'],
                ['area' => 'sandur', 'pincode' => '583119'],
                ['area' => 'toranagallu', 'pincode' => '583275'],
                ['area' => 'tekkalakote', 'pincode' => '583122']
            ],
            'mangaluru' => [
                ['area' => 'kodialbail', 'pincode' => '575003'],
                ['area' => 'pandeshwar', 'pincode' => '575001'],
                ['area' => 'hampankatta', 'pincode' => '575001'],
                ['area' => 'kadri', 'pincode' => '575002'],
                ['area' => 'kankanady', 'pincode' => '575002'],
                ['area' => 'ullal', 'pincode' => '574104'],
                ['area' => 'surathkal', 'pincode' => '575025'],
                ['area' => 'mulky', 'pincode' => '574154']
            ],
            'hubli-dharwad' => [
                ['area' => 'hubli', 'pincode' => '580020'],
                ['area' => 'dharwad', 'pincode' => '580001'],
                ['area' => 'vidyanagar', 'pincode' => '580021'],
                ['area' => 'rayapur', 'pincode' => '580023'],
                ['area' => 'navanagar', 'pincode' => '580025'],
                ['area' => 'keshwapur', 'pincode' => '580023'],
                ['area' => 'kundgol', 'pincode' => '581207'],
                ['area' => 'annigeri', 'pincode' => '582201']
            ],
            'gulbarga' => [
                ['area' => 'gulbarga', 'pincode' => '585101'],
                ['area' => 'jewargi', 'pincode' => '585310'],
                ['area' => 'chincholi', 'pincode' => '585307'],
                ['area' => 'sedam', 'pincode' => '585222'],
                ['area' => 'aland', 'pincode' => '585301'],
                ['area' => 'afzalpur', 'pincode' => '585301'],
                ['area' => 'chitapur', 'pincode' => '585212']
            ],
            'belgaum' => [
                ['area' => 'belgaum', 'pincode' => '590001'],
                ['area' => 'hindalga', 'pincode' => '591108'],
                ['area' => 'khanapur', 'pincode' => '591302'],
                ['area' => 'bailhongal', 'pincode' => '591102'],
                ['area' => 'gokak', 'pincode' => '591307'],
                ['area' => 'athni', 'pincode' => '591304'],
                ['area' => 'chikkodi', 'pincode' => '591201']
            ],
            'bijapur' => [
                ['area' => 'bijapur', 'pincode' => '586101'],
                ['area' => 'indi', 'pincode' => '586209'],
                ['area' => 'muddebihal', 'pincode' => '586212'],
                ['area' => 'basavana-bagewadi', 'pincode' => '586203'],
                ['area' => 'sindgi', 'pincode' => '586128'],
                ['area' => 'chadchan', 'pincode' => '586115']
            ],
            'tumakuru' => [
                ['area' => 'tumakuru', 'pincode' => '572101'],
                ['area' => 'gubbi', 'pincode' => '572216'],
                ['area' => 'kunigal', 'pincode' => '572130'],
                ['area' => 'madhugiri', 'pincode' => '572132'],
                ['area' => 'sira', 'pincode' => '572137'],
                ['area' => 'tiptur', 'pincode' => '572201'],
                ['area' => 'turuvekere', 'pincode' => '572227']
            ],
            'shimoga' => [
                ['area' => 'shimoga', 'pincode' => '577201'],
                ['area' => 'bhadravati', 'pincode' => '577301'],
                ['area' => 'thirthahalli', 'pincode' => '577432'],
                ['area' => 'sagar', 'pincode' => '577401'],
                ['area' => 'hosanagara', 'pincode' => '577418'],
                ['area' => 'shikaripura', 'pincode' => '577427'],
                ['area' => 'sorab', 'pincode' => '577429']
            ],
            'davangere' => [
                ['area' => 'davangere', 'pincode' => '577001'],
                ['area' => 'channagiri', 'pincode' => '577213'],
                ['area' => 'harihara', 'pincode' => '577601'],
                ['area' => 'honnali', 'pincode' => '577217'],
                ['area' => 'jagalur', 'pincode' => '577528'],
                ['area' => 'nyamathi', 'pincode' => '577421']
            ],
            'bengaluru-rural' => [
                ['area' => 'devanahalli', 'pincode' => '562110'],
                ['area' => 'doddaballapura', 'pincode' => '561203'],
                ['area' => 'nelamangala', 'pincode' => '562123'],
                ['area' => 'hosakote', 'pincode' => '562114']
            ],
            'ramanagara' => [
                ['area' => 'ramanagara', 'pincode' => '562159'],
                ['area' => 'channapatna', 'pincode' => '571501'],
                ['area' => 'kanakapura', 'pincode' => '562117'],
                ['area' => 'magadi', 'pincode' => '562120']
            ],
            'mandya' => [
                ['area' => 'mandya', 'pincode' => '571401'],
                ['area' => 'maddur', 'pincode' => '571428'],
                ['area' => 'malavalli', 'pincode' => '571430'],
                ['area' => 'pandavapura', 'pincode' => '571434']
            ],
            'chamarajanagar' => [
                ['area' => 'chamarajanagar', 'pincode' => '571313'],
                ['area' => 'gundlupet', 'pincode' => '571111'],
                ['area' => 'kollegal', 'pincode' => '571440'],
                ['area' => 'yelandur', 'pincode' => '571441']
            ],
            'hassan' => [
                ['area' => 'hassan', 'pincode' => '573201'],
                ['area' => 'arsikere', 'pincode' => '573103'],
                ['area' => 'belur', 'pincode' => '573115'],
                ['area' => 'channarayapatna', 'pincode' => '573116']
            ],
            'chikmagalur' => [
                ['area' => 'chikmagalur', 'pincode' => '577101'],
                ['area' => 'kadur', 'pincode' => '577548'],
                ['area' => 'koppa', 'pincode' => '577126'],
                ['area' => 'tarikere', 'pincode' => '577228']
            ],
            'kodagu' => [
                ['area' => 'madikeri', 'pincode' => '571201'],
                ['area' => 'somwarpet', 'pincode' => '571236'],
                ['area' => 'virajpet', 'pincode' => '571218'],
                ['area' => 'kushalnagar', 'pincode' => '571234']
            ],
            'dakshina-kannada' => [
                ['area' => 'bantwal', 'pincode' => '574211'],
                ['area' => 'puttur', 'pincode' => '574201'],
                ['area' => 'belthangady', 'pincode' => '574214'],
                ['area' => 'sullia', 'pincode' => '574239']
            ],
            'udupi' => [
                ['area' => 'udupi', 'pincode' => '576101'],
                ['area' => 'manipal', 'pincode' => '576104'],
                ['area' => 'kundapura', 'pincode' => '576201'],
                ['area' => 'karkala', 'pincode' => '574104']
            ],
            'uttara-kannada' => [
                ['area' => 'karwar', 'pincode' => '581301'],
                ['area' => 'sirsi', 'pincode' => '581401'],
                ['area' => 'kumta', 'pincode' => '581343'],
                ['area' => 'honnavar', 'pincode' => '581334']
            ],
            'haveri' => [
                ['area' => 'haveri', 'pincode' => '581110'],
                ['area' => 'ranebennur', 'pincode' => '581115'],
                ['area' => 'byadgi', 'pincode' => '581106'],
                ['area' => 'savanur', 'pincode' => '581118']
            ],
            'gadag' => [
                ['area' => 'gadag', 'pincode' => '582101'],
                ['area' => 'nargund', 'pincode' => '582207'],
                ['area' => 'ron', 'pincode' => '582213'],
                ['area' => 'mundargi', 'pincode' => '582118']
            ],
            'bagalkot' => [
                ['area' => 'bagalkot', 'pincode' => '587101'],
                ['area' => 'jamkhandi', 'pincode' => '587301'],
                ['area' => 'badami', 'pincode' => '587201'],
                ['area' => 'hungund', 'pincode' => '587118']
            ],
            'vijayapura' => [
                ['area' => 'vijayapura', 'pincode' => '586101'],
                ['area' => 'indi', 'pincode' => '586209'],
                ['area' => 'sindgi', 'pincode' => '586128'],
                ['area' => 'basavana-bagewadi', 'pincode' => '586203']
            ],
            'raichur' => [
                ['area' => 'raichur', 'pincode' => '584101'],
                ['area' => 'manvi', 'pincode' => '584123'],
                ['area' => 'sindhanur', 'pincode' => '584128'],
                ['area' => 'devadurga', 'pincode' => '584111']
            ],
            'koppal' => [
                ['area' => 'koppal', 'pincode' => '583231'],
                ['area' => 'gangavathi', 'pincode' => '583227'],
                ['area' => 'kushtagi', 'pincode' => '584121'],
                ['area' => 'yelburga', 'pincode' => '583236']
            ],
            'yadgir' => [
                ['area' => 'yadgir', 'pincode' => '585202'],
                ['area' => 'shahapur', 'pincode' => '585223'],
                ['area' => 'shorapur', 'pincode' => '585224'],
                ['area' => 'surapura', 'pincode' => '585222']
            ],
            'kalaburagi' => [
                ['area' => 'kalaburagi', 'pincode' => '585101'],
                ['area' => 'aland', 'pincode' => '585302'],
                ['area' => 'afzalpur', 'pincode' => '585301'],
                ['area' => 'chincholi', 'pincode' => '585307']
            ],
            'bidar' => [
                ['area' => 'bidar', 'pincode' => '585401'],
                ['area' => 'bhalki', 'pincode' => '585328'],
                ['area' => 'humnabad', 'pincode' => '585330'],
                ['area' => 'basavakalyan', 'pincode' => '585327']
            ],
            'chitradurga' => [
                ['area' => 'chitradurga', 'pincode' => '577501'],
                ['area' => 'challakere', 'pincode' => '577522'],
                ['area' => 'hiriyur', 'pincode' => '577598'],
                ['area' => 'holalkere', 'pincode' => '577526']
            ]
        ],
        'kerala' => [
            'thiruvananthapuram' => [
                ['area' => 'thiruvananthapuram', 'pincode' => '695001'],
                ['area' => 'kovalam', 'pincode' => '695527'],
                ['area' => 'neyyattinkara', 'pincode' => '695121'],
                ['area' => 'varkala', 'pincode' => '695141'],
                ['area' => 'attingal', 'pincode' => '695101'],
                ['area' => 'nedumangad', 'pincode' => '695541']
            ],
            'kollam' => [
                ['area' => 'kollam', 'pincode' => '691001'],
                ['area' => 'punalur', 'pincode' => '691305'],
                ['area' => 'karunagappally', 'pincode' => '690518'],
                ['area' => 'paravur', 'pincode' => '691301'],
                ['area' => 'kottarakkara', 'pincode' => '691506']
            ],
            'pathanamthitta' => [
                ['area' => 'pathanamthitta', 'pincode' => '689645'],
                ['area' => 'thiruvalla', 'pincode' => '689101'],
                ['area' => 'adoor', 'pincode' => '691523'],
                ['area' => 'pandalam', 'pincode' => '689501'],
                ['area' => 'ranni', 'pincode' => '689711']
            ],
            'alappuzha' => [
                ['area' => 'alappuzha', 'pincode' => '688001'],
                ['area' => 'cherthala', 'pincode' => '688524'],
                ['area' => 'kayamkulam', 'pincode' => '690502'],
                ['area' => 'mavelikkara', 'pincode' => '690101'],
                ['area' => 'haripad', 'pincode' => '690514']
            ],
            'kottayam' => [
                ['area' => 'kottayam', 'pincode' => '686001'],
                ['area' => 'changanassery', 'pincode' => '686101'],
                ['area' => 'pala', 'pincode' => '686575'],
                ['area' => 'ettumanoor', 'pincode' => '686631'],
                ['area' => 'vaikom', 'pincode' => '686141']
            ],
            'idukki' => [
                ['area' => 'thodupuzha', 'pincode' => '685584'],
                ['area' => 'munnar', 'pincode' => '685612'],
                ['area' => 'kumily', 'pincode' => '685509'],
                ['area' => 'painavu', 'pincode' => '685603'],
                ['area' => 'devikulam', 'pincode' => '685615']
            ],
            'ernakulam' => [
                ['area' => 'kochi', 'pincode' => '682001'],
                ['area' => 'ernakulam', 'pincode' => '682011'],
                ['area' => 'aluva', 'pincode' => '683101'],
                ['area' => 'perumbavoor', 'pincode' => '683542'],
                ['area' => 'muvattupuzha', 'pincode' => '686661'],
                ['area' => 'angamaly', 'pincode' => '683572']
            ],
            'thrissur' => [
                ['area' => 'thrissur', 'pincode' => '680001'],
                ['area' => 'chalakudy', 'pincode' => '680307'],
                ['area' => 'irinjalakuda', 'pincode' => '680121'],
                ['area' => 'kodungallur', 'pincode' => '680664'],
                ['area' => 'guruvayur', 'pincode' => '680101']
            ],
            'palakkad' => [
                ['area' => 'palakkad', 'pincode' => '678001'],
                ['area' => 'ottappalam', 'pincode' => '679101'],
                ['area' => 'chittur', 'pincode' => '678101'],
                ['area' => 'mannarkkad', 'pincode' => '678582'],
                ['area' => 'shoranur', 'pincode' => '679121']
            ],
            'malappuram' => [
                ['area' => 'malappuram', 'pincode' => '676505'],
                ['area' => 'manjeri', 'pincode' => '676121'],
                ['area' => 'perinthalmanna', 'pincode' => '679322'],
                ['area' => 'ponnani', 'pincode' => '679577'],
                ['area' => 'tirur', 'pincode' => '676101']
            ],
            'kozhikode' => [
                ['area' => 'kozhikode', 'pincode' => '673001'],
                ['area' => 'calicut', 'pincode' => '673004'],
                ['area' => 'vadakara', 'pincode' => '673104'],
                ['area' => 'koyilandy', 'pincode' => '673305'],
                ['area' => 'feroke', 'pincode' => '673631']
            ],
            'wayanad' => [
                ['area' => 'kalpetta', 'pincode' => '673122'],
                ['area' => 'mananthavady', 'pincode' => '670645'],
                ['area' => 'sulthan-bathery', 'pincode' => '673592'],
                ['area' => 'vythiri', 'pincode' => '673576']
            ],
            'kannur' => [
                ['area' => 'kannur', 'pincode' => '670001'],
                ['area' => 'thalassery', 'pincode' => '670101'],
                ['area' => 'payyanur', 'pincode' => '670307'],
                ['area' => 'iritty', 'pincode' => '670703'],
                ['area' => 'mattannur', 'pincode' => '670702']
            ],
            'kasaragod' => [
                ['area' => 'kasaragod', 'pincode' => '671121'],
                ['area' => 'kanhangad', 'pincode' => '671315'],
                ['area' => 'nileshwar', 'pincode' => '671314'],
                ['area' => 'uppala', 'pincode' => '671322']
            ]
        ],
        'madhya-pradesh' => [
            'bhopal' => [
                ['area' => 'bhopal', 'pincode' => '462001'],
                ['area' => 'new-market', 'pincode' => '462001'],
                ['area' => 'arera-colony', 'pincode' => '462016'],
                ['area' => 'mp-nagar', 'pincode' => '462011'],
                ['area' => 'habibganj', 'pincode' => '462024']
            ],
            'indore' => [
                ['area' => 'indore', 'pincode' => '452001'],
                ['area' => 'rajwada', 'pincode' => '452001'],
                ['area' => 'palasia', 'pincode' => '452001'],
                ['area' => 'vijay-nagar', 'pincode' => '452010'],
                ['area' => 'bhawarkuan', 'pincode' => '452001']
            ],
            'jabalpur' => [
                ['area' => 'jabalpur', 'pincode' => '482001'],
                ['area' => 'civil-lines', 'pincode' => '482001'],
                ['area' => 'napier-town', 'pincode' => '482001'],
                ['area' => 'russell-chowk', 'pincode' => '482002']
            ],
            'gwalior' => [
                ['area' => 'gwalior', 'pincode' => '474001'],
                ['area' => 'lashkar', 'pincode' => '474009'],
                ['area' => 'morar', 'pincode' => '474006'],
                ['area' => 'thatipur', 'pincode' => '474011']
            ],
            'ujjain' => [
                ['area' => 'ujjain', 'pincode' => '456001'],
                ['area' => 'mahakal', 'pincode' => '456006'],
                ['area' => 'dewas', 'pincode' => '455001'],
                ['area' => 'nagda', 'pincode' => '456331']
            ],
            'sagar' => [
                ['area' => 'sagar', 'pincode' => '470001'],
                ['area' => 'civil-lines', 'pincode' => '470002'],
                ['area' => 'makronia', 'pincode' => '470004'],
                ['area' => 'rehli', 'pincode' => '470227']
            ],
            'rewa' => [
                ['area' => 'rewa', 'pincode' => '486001'],
                ['area' => 'sirmaur', 'pincode' => '486886'],
                ['area' => 'teonthar', 'pincode' => '486888'],
                ['area' => 'mauganj', 'pincode' => '486331']
            ],
            'satna' => [
                ['area' => 'satna', 'pincode' => '485001'],
                ['area' => 'maihar', 'pincode' => '485771'],
                ['area' => 'nagod', 'pincode' => '485446'],
                ['area' => 'amarpatan', 'pincode' => '485775']
            ],
            'dewas' => [
                ['area' => 'dewas', 'pincode' => '455001'],
                ['area' => 'tonk-khurd', 'pincode' => '455116'],
                ['area' => 'kannod', 'pincode' => '455440'],
                ['area' => 'bagli', 'pincode' => '455227']
            ],
            'ratlam' => [
                ['area' => 'ratlam', 'pincode' => '457001'],
                ['area' => 'alot', 'pincode' => '457114'],
                ['area' => 'jaora', 'pincode' => '457226'],
                ['area' => 'sailana', 'pincode' => '457550']
            ],
            'mandsaur' => [
                ['area' => 'mandsaur', 'pincode' => '458001'],
                ['area' => 'sitamau', 'pincode' => '458990'],
                ['area' => 'malhargarh', 'pincode' => '458880'],
                ['area' => 'garoth', 'pincode' => '458888']
            ],
            'neemuch' => [
                ['area' => 'neemuch', 'pincode' => '458441'],
                ['area' => 'manasa', 'pincode' => '458110'],
                ['area' => 'jawad', 'pincode' => '458330'],
                ['area' => 'singoli', 'pincode' => '458470']
            ],
            'shajapur' => [
                ['area' => 'shajapur', 'pincode' => '465001'],
                ['area' => 'shujalpur', 'pincode' => '465333'],
                ['area' => 'agar', 'pincode' => '465441'],
                ['area' => 'susner', 'pincode' => '465447']
            ],
            'agar-malwa' => [
                ['area' => 'agar', 'pincode' => '465441'],
                ['area' => 'susner', 'pincode' => '465447'],
                ['area' => 'nalkheda', 'pincode' => '465331'],
                ['area' => 'badod', 'pincode' => '465335']
            ],
            'rajgarh' => [
                ['area' => 'rajgarh', 'pincode' => '465661'],
                ['area' => 'biaora', 'pincode' => '465674'],
                ['area' => 'narsingarh', 'pincode' => '465669'],
                ['area' => 'khilchipur', 'pincode' => '465679']
            ],
            'vidisha' => [
                ['area' => 'vidisha', 'pincode' => '464001'],
                ['area' => 'sironj', 'pincode' => '464228'],
                ['area' => 'basoda', 'pincode' => '464221'],
                ['area' => 'kurwai', 'pincode' => '464224']
            ],
            'raisen' => [
                ['area' => 'raisen', 'pincode' => '464551'],
                ['area' => 'bareli', 'pincode' => '464668'],
                ['area' => 'begamganj', 'pincode' => '464881'],
                ['area' => 'silwani', 'pincode' => '464886']
            ],
            'sehore' => [
                ['area' => 'sehore', 'pincode' => '466001'],
                ['area' => 'ashta', 'pincode' => '466116'],
                ['area' => 'ichhawar', 'pincode' => '466115'],
                ['area' => 'nasrullaganj', 'pincode' => '466331']
            ],
            'betul' => [
                ['area' => 'betul', 'pincode' => '460001'],
                ['area' => 'multai', 'pincode' => '460661'],
                ['area' => 'amla', 'pincode' => '460551'],
                ['area' => 'bhainsdehi', 'pincode' => '460668']
            ],
            'harda' => [
                ['area' => 'harda', 'pincode' => '461331'],
                ['area' => 'timarni', 'pincode' => '461228'],
                ['area' => 'khirkiya', 'pincode' => '461441'],
                ['area' => 'sirali', 'pincode' => '461115']
            ],
            'hoshangabad' => [
                ['area' => 'hoshangabad', 'pincode' => '461001'],
                ['area' => 'itarsi', 'pincode' => '461111'],
                ['area' => 'sohagpur', 'pincode' => '461771'],
                ['area' => 'pipariya', 'pincode' => '461775']
            ],
            'katni' => [
                ['area' => 'katni', 'pincode' => '483501'],
                ['area' => 'vijayraghavgarh', 'pincode' => '483775'],
                ['area' => 'barhi', 'pincode' => '483770'],
                ['area' => 'bahoriband', 'pincode' => '483994']
            ],
            'narsinghpur' => [
                ['area' => 'narsinghpur', 'pincode' => '487001'],
                ['area' => 'gadarwara', 'pincode' => '487551'],
                ['area' => 'kareli', 'pincode' => '487221'],
                ['area' => 'tendukheda', 'pincode' => '487330']
            ],
            'dindori' => [
                ['area' => 'dindori', 'pincode' => '481880'],
                ['area' => 'shahpura', 'pincode' => '481990'],
                ['area' => 'samnapur', 'pincode' => '481879'],
                ['area' => 'karanjia', 'pincode' => '481995']
            ],
            'mandla' => [
                ['area' => 'mandla', 'pincode' => '481661'],
                ['area' => 'nainpur', 'pincode' => '481768'],
                ['area' => 'bichhiya', 'pincode' => '481990'],
                ['area' => 'niwas', 'pincode' => '481879']
            ],
            'balaghat' => [
                ['area' => 'balaghat', 'pincode' => '481001'],
                ['area' => 'waraseoni', 'pincode' => '481331'],
                ['area' => 'katangi', 'pincode' => '481445'],
                ['area' => 'lanji', 'pincode' => '481551']
            ],
            'seoni' => [
                ['area' => 'seoni', 'pincode' => '480661'],
                ['area' => 'lakhnadon', 'pincode' => '480886'],
                ['area' => 'barghat', 'pincode' => '480881'],
                ['area' => 'keolari', 'pincode' => '480771']
            ],
            'chhindwara' => [
                ['area' => 'chhindwara', 'pincode' => '480001'],
                ['area' => 'parasia', 'pincode' => '480441'],
                ['area' => 'pandhurna', 'pincode' => '480334'],
                ['area' => 'sausar', 'pincode' => '480106']
            ],
            'damoh' => [
                ['area' => 'damoh', 'pincode' => '470661'],
                ['area' => 'hatta', 'pincode' => '470775'],
                ['area' => 'patharia', 'pincode' => '470671'],
                ['area' => 'tendukheda', 'pincode' => '470772']
            ],
            'panna' => [
                ['area' => 'panna', 'pincode' => '488001'],
                ['area' => 'pawai', 'pincode' => '488220'],
                ['area' => 'ajaigarh', 'pincode' => '488220'],
                ['area' => 'amanganj', 'pincode' => '488330']
            ],
            'tikamgarh' => [
                ['area' => 'tikamgarh', 'pincode' => '472001'],
                ['area' => 'jatara', 'pincode' => '472111'],
                ['area' => 'niwari', 'pincode' => '472442'],
                ['area' => 'prithvipur', 'pincode' => '472221']
            ],
            'chhatarpur' => [
                ['area' => 'chhatarpur', 'pincode' => '471001'],
                ['area' => 'nowgong', 'pincode' => '471201'],
                ['area' => 'bijawar', 'pincode' => '471311'],
                ['area' => 'rajnagar', 'pincode' => '471407']
            ],
            'datia' => [
                ['area' => 'datia', 'pincode' => '475661'],
                ['area' => 'seondha', 'pincode' => '475551'],
                ['area' => 'bhander', 'pincode' => '475682'],
                ['area' => 'indergarh', 'pincode' => '475661']
            ],
            'sheopur' => [
                ['area' => 'sheopur', 'pincode' => '476337'],
                ['area' => 'vijaypur', 'pincode' => '476338'],
                ['area' => 'karahal', 'pincode' => '476224'],
                ['area' => 'badoda', 'pincode' => '476339']
            ],
            'shivpuri' => [
                ['area' => 'shivpuri', 'pincode' => '473551'],
                ['area' => 'kolaras', 'pincode' => '473770'],
                ['area' => 'pohri', 'pincode' => '473781'],
                ['area' => 'narwar', 'pincode' => '473880']
            ],
            'guna' => [
                ['area' => 'guna', 'pincode' => '473001'],
                ['area' => 'raghogarh', 'pincode' => '473226'],
                ['area' => 'aron', 'pincode' => '473101'],
                ['area' => 'chachoda', 'pincode' => '473331']
            ],
            'ashoknagar' => [
                ['area' => 'ashoknagar', 'pincode' => '473331'],
                ['area' => 'chanderi', 'pincode' => '473446'],
                ['area' => 'mungaoli', 'pincode' => '473223'],
                ['area' => 'isagarh', 'pincode' => '473332']
            ],
            'bhind' => [
                ['area' => 'bhind', 'pincode' => '477001'],
                ['area' => 'mehgaon', 'pincode' => '477446'],
                ['area' => 'lahar', 'pincode' => '477445'],
                ['area' => 'ater', 'pincode' => '477444']
            ],
            'morena' => [
                ['area' => 'morena', 'pincode' => '476001'],
                ['area' => 'porsa', 'pincode' => '476115'],
                ['area' => 'joura', 'pincode' => '476221'],
                ['area' => 'ambah', 'pincode' => '476111']
            ],
            'khandwa' => [
                ['area' => 'khandwa', 'pincode' => '450001'],
                ['area' => 'pandhana', 'pincode' => '450112'],
                ['area' => 'khalwa', 'pincode' => '450117'],
                ['area' => 'harsud', 'pincode' => '450116']
            ],
            'burhanpur' => [
                ['area' => 'burhanpur', 'pincode' => '450331'],
                ['area' => 'nepanagar', 'pincode' => '450881'],
                ['area' => 'shahpur', 'pincode' => '450116'],
                ['area' => 'khaknar', 'pincode' => '450115']
            ],
            'khargone' => [
                ['area' => 'khargone', 'pincode' => '451001'],
                ['area' => 'barwaha', 'pincode' => '451551'],
                ['area' => 'maheshwar', 'pincode' => '451224'],
                ['area' => 'kasrawad', 'pincode' => '451660']
            ],
            'dhar' => [
                ['area' => 'dhar', 'pincode' => '454001'],
                ['area' => 'manawar', 'pincode' => '454446'],
                ['area' => 'sardarpur', 'pincode' => '454111'],
                ['area' => 'kukshi', 'pincode' => '454331']
            ],
            'barwani' => [
                ['area' => 'barwani', 'pincode' => '451551'],
                ['area' => 'sendhwa', 'pincode' => '451666'],
                ['area' => 'rajpur', 'pincode' => '451770'],
                ['area' => 'thikri', 'pincode' => '451771']
            ],
            'jhabua' => [
                ['area' => 'jhabua', 'pincode' => '457661'],
                ['area' => 'petlawad', 'pincode' => '457773'],
                ['area' => 'thandla', 'pincode' => '457777'],
                ['area' => 'meghnagar', 'pincode' => '457779']
            ],
            'alirajpur' => [
                ['area' => 'alirajpur', 'pincode' => '457887'],
                ['area' => 'jobat', 'pincode' => '457990'],
                ['area' => 'bhabra', 'pincode' => '457770'],
                ['area' => 'sondwa', 'pincode' => '457991']
            ],
            'shahdol' => [
                ['area' => 'shahdol', 'pincode' => '484001'],
                ['area' => 'burhar', 'pincode' => '484110'],
                ['area' => 'sohagpur', 'pincode' => '484771'],
                ['area' => 'jaisinghnagar', 'pincode' => '484776']
            ],
            'umaria' => [
                ['area' => 'umaria', 'pincode' => '484661'],
                ['area' => 'manpur', 'pincode' => '484661'],
                ['area' => 'pali', 'pincode' => '484770'],
                ['area' => 'bandhogarh', 'pincode' => '484661']
            ],
            'anuppur' => [
                ['area' => 'anuppur', 'pincode' => '484224'],
                ['area' => 'kotma', 'pincode' => '484334'],
                ['area' => 'jaithari', 'pincode' => '484770'],
                ['area' => 'pushprajgarh', 'pincode' => '484556']
            ],
            'sidhi' => [
                ['area' => 'sidhi', 'pincode' => '486661'],
                ['area' => 'singrauli', 'pincode' => '486889'],
                ['area' => 'churhat', 'pincode' => '486881'],
                ['area' => 'chitrangi', 'pincode' => '486670']
            ],
            'singrauli' => [
                ['area' => 'waidhan', 'pincode' => '486886'],
                ['area' => 'deosar', 'pincode' => '486669'],
                ['area' => 'baidhan', 'pincode' => '486890'],
                ['area' => 'chitrangi', 'pincode' => '486885']
            ],
            'niwari' => [
                ['area' => 'niwari', 'pincode' => '472442'],
                ['area' => 'prithvipur', 'pincode' => '472111'],
                ['area' => 'orchha', 'pincode' => '472246'],
                ['area' => 'khargapur', 'pincode' => '472445']
            ]
        ],
        'maharashtra' => [
            'mumbai-city' => [
                ['area' => 'mumbai', 'pincode' => '400001'],
                ['area' => 'fort', 'pincode' => '400001'],
                ['area' => 'colaba', 'pincode' => '400005'],
                ['area' => 'churchgate', 'pincode' => '400020'],
                ['area' => 'marine-drive', 'pincode' => '400002']
            ],
            'mumbai-suburban' => [
                ['area' => 'bandra', 'pincode' => '400050'],
                ['area' => 'andheri', 'pincode' => '400058'],
                ['area' => 'juhu', 'pincode' => '400049'],
                ['area' => 'santacruz', 'pincode' => '400054'],
                ['area' => 'powai', 'pincode' => '400076']
            ],
            'pune' => [
                ['area' => 'pune', 'pincode' => '411001'],
                ['area' => 'camp', 'pincode' => '411001'],
                ['area' => 'koregaon-park', 'pincode' => '411001'],
                ['area' => 'aundh', 'pincode' => '411007'],
                ['area' => 'hinjewadi', 'pincode' => '411057']
            ],
            'nagpur' => [
                ['area' => 'nagpur', 'pincode' => '440001'],
                ['area' => 'sitabuldi', 'pincode' => '440012'],
                ['area' => 'dharampeth', 'pincode' => '440010'],
                ['area' => 'civil-lines', 'pincode' => '440001']
            ],
            'nashik' => [
                ['area' => 'nashik', 'pincode' => '422001'],
                ['area' => 'nashik-road', 'pincode' => '422101'],
                ['area' => 'panchavati', 'pincode' => '422003'],
                ['area' => 'college-road', 'pincode' => '422005']
            ],
            'aurangabad' => [
                ['area' => 'aurangabad', 'pincode' => '431001'],
                ['area' => 'cidco', 'pincode' => '431003'],
                ['area' => 'waluj', 'pincode' => '431136'],
                ['area' => 'paithan', 'pincode' => '431107']
            ],
            'thane' => [
                ['area' => 'thane', 'pincode' => '400601'],
                ['area' => 'kalyan', 'pincode' => '421301'],
                ['area' => 'dombivli', 'pincode' => '421201'],
                ['area' => 'ulhasnagar', 'pincode' => '421001']
            ],
            'palghar' => [
                ['area' => 'palghar', 'pincode' => '401404'],
                ['area' => 'vasai', 'pincode' => '401201'],
                ['area' => 'virar', 'pincode' => '401303'],
                ['area' => 'dahanu', 'pincode' => '401601']
            ],
            'raigad' => [
                ['area' => 'alibag', 'pincode' => '402201'],
                ['area' => 'panvel', 'pincode' => '410206'],
                ['area' => 'khopoli', 'pincode' => '410203'],
                ['area' => 'pen', 'pincode' => '402107']
            ],
            'ratnagiri' => [
                ['area' => 'ratnagiri', 'pincode' => '415612'],
                ['area' => 'chiplun', 'pincode' => '415605'],
                ['area' => 'guhagar', 'pincode' => '415703'],
                ['area' => 'dapoli', 'pincode' => '415712']
            ],
            'sindhudurg' => [
                ['area' => 'kudal', 'pincode' => '416520'],
                ['area' => 'malvan', 'pincode' => '416606'],
                ['area' => 'vengurla', 'pincode' => '416516'],
                ['area' => 'sawantwadi', 'pincode' => '416510']
            ],
            'kolhapur' => [
                ['area' => 'kolhapur', 'pincode' => '416001'],
                ['area' => 'ichalkaranji', 'pincode' => '416115'],
                ['area' => 'panhala', 'pincode' => '416201'],
                ['area' => 'jaysingpur', 'pincode' => '416101']
            ],
            'sangli' => [
                ['area' => 'sangli', 'pincode' => '416416'],
                ['area' => 'miraj', 'pincode' => '416410'],
                ['area' => 'vita', 'pincode' => '415311'],
                ['area' => 'tasgaon', 'pincode' => '416312']
            ],
            'satara' => [
                ['area' => 'satara', 'pincode' => '415001'],
                ['area' => 'karad', 'pincode' => '415110'],
                ['area' => 'wai', 'pincode' => '412803'],
                ['area' => 'phaltan', 'pincode' => '415523']
            ],
            'solapur' => [
                ['area' => 'solapur', 'pincode' => '413001'],
                ['area' => 'pandharpur', 'pincode' => '413304'],
                ['area' => 'barshi', 'pincode' => '413401'],
                ['area' => 'akkalkot', 'pincode' => '413216']
            ],
            'ahmednagar' => [
                ['area' => 'ahmednagar', 'pincode' => '414001'],
                ['area' => 'shrirampur', 'pincode' => '413709'],
                ['area' => 'sangamner', 'pincode' => '422605'],
                ['area' => 'kopargaon', 'pincode' => '423601']
            ],
            'dhule' => [
                ['area' => 'dhule', 'pincode' => '424001'],
                ['area' => 'shirpur', 'pincode' => '425405'],
                ['area' => 'sakri', 'pincode' => '424304'],
                ['area' => 'sindkheda', 'pincode' => '424309']
            ],
            'jalgaon' => [
                ['area' => 'jalgaon', 'pincode' => '425001'],
                ['area' => 'bhusawal', 'pincode' => '425201'],
                ['area' => 'amalner', 'pincode' => '425401'],
                ['area' => 'chalisgaon', 'pincode' => '424101']
            ],
            'nandurbar' => [
                ['area' => 'nandurbar', 'pincode' => '425412'],
                ['area' => 'shahada', 'pincode' => '425409'],
                ['area' => 'taloda', 'pincode' => '425413'],
                ['area' => 'akkalkuwa', 'pincode' => '425415']
            ],
            'jalna' => [
                ['area' => 'jalna', 'pincode' => '431203'],
                ['area' => 'bhokardan', 'pincode' => '431114'],
                ['area' => 'partur', 'pincode' => '431501'],
                ['area' => 'ambad', 'pincode' => '431204']
            ],
            'beed' => [
                ['area' => 'beed', 'pincode' => '431122'],
                ['area' => 'parli', 'pincode' => '431515'],
                ['area' => 'ambajogai', 'pincode' => '431517'],
                ['area' => 'georai', 'pincode' => '431127']
            ],
            'parbhani' => [
                ['area' => 'parbhani', 'pincode' => '431401'],
                ['area' => 'gangakhed', 'pincode' => '431514'],
                ['area' => 'purna', 'pincode' => '431511'],
                ['area' => 'selu', 'pincode' => '431503']
            ],
            'hingoli' => [
                ['area' => 'hingoli', 'pincode' => '431513'],
                ['area' => 'kalamnuri', 'pincode' => '431702'],
                ['area' => 'basmat', 'pincode' => '431512'],
                ['area' => 'aundha-nagnath', 'pincode' => '431701']
            ],
            'nanded' => [
                ['area' => 'nanded', 'pincode' => '431601'],
                ['area' => 'deglur', 'pincode' => '431717'],
                ['area' => 'kinwat', 'pincode' => '431804'],
                ['area' => 'mukhed', 'pincode' => '431715']
            ],
            'latur' => [
                ['area' => 'latur', 'pincode' => '413512'],
                ['area' => 'udgir', 'pincode' => '413517'],
                ['area' => 'ausa', 'pincode' => '413520'],
                ['area' => 'nilanga', 'pincode' => '413521']
            ],
            'osmanabad' => [
                ['area' => 'osmanabad', 'pincode' => '413501'],
                ['area' => 'tuljapur', 'pincode' => '413601'],
                ['area' => 'omerga', 'pincode' => '413606'],
                ['area' => 'paranda', 'pincode' => '413502']
            ],
            'amravati' => [
                ['area' => 'amravati', 'pincode' => '444601'],
                ['area' => 'achalpur', 'pincode' => '444806'],
                ['area' => 'dharni', 'pincode' => '444702'],
                ['area' => 'anjangaon', 'pincode' => '444705']
            ],
            'akola' => [
                ['area' => 'akola', 'pincode' => '444001'],
                ['area' => 'akot', 'pincode' => '444101'],
                ['area' => 'telhara', 'pincode' => '444108'],
                ['area' => 'barshi-takli', 'pincode' => '444401']
            ],
            'washim' => [
                ['area' => 'washim', 'pincode' => '444505'],
                ['area' => 'karanja', 'pincode' => '444105'],
                ['area' => 'malegaon', 'pincode' => '444503'],
                ['area' => 'mangrulpir', 'pincode' => '444403']
            ],
            'buldhana' => [
                ['area' => 'buldhana', 'pincode' => '443001'],
                ['area' => 'malkapur', 'pincode' => '443101'],
                ['area' => 'khamgaon', 'pincode' => '444303'],
                ['area' => 'chikhli', 'pincode' => '443201']
            ],
            'yavatmal' => [
                ['area' => 'yavatmal', 'pincode' => '445001'],
                ['area' => 'pusad', 'pincode' => '445204'],
                ['area' => 'wani', 'pincode' => '445304'],
                ['area' => 'darwha', 'pincode' => '445202']
            ],
            'wardha' => [
                ['area' => 'wardha', 'pincode' => '442001'],
                ['area' => 'hinganghat', 'pincode' => '442301'],
                ['area' => 'arvi', 'pincode' => '442201'],
                ['area' => 'sevagram', 'pincode' => '442102']
            ],
            'chandrapur' => [
                ['area' => 'chandrapur', 'pincode' => '442401'],
                ['area' => 'ballarpur', 'pincode' => '442701'],
                ['area' => 'rajura', 'pincode' => '442905'],
                ['area' => 'warora', 'pincode' => '442907']
            ],
            'gadchiroli' => [
                ['area' => 'gadchiroli', 'pincode' => '442605'],
                ['area' => 'desaiganj', 'pincode' => '442916'],
                ['area' => 'aheri', 'pincode' => '442705'],
                ['area' => 'armori', 'pincode' => '441208']
            ],
            'bhandara' => [
                ['area' => 'bhandara', 'pincode' => '441904'],
                ['area' => 'tumsar', 'pincode' => '441912'],
                ['area' => 'pauni', 'pincode' => '441910'],
                ['area' => 'mohadi', 'pincode' => '441923']
            ],
            'gondia' => [
                ['area' => 'gondia', 'pincode' => '441601'],
                ['area' => 'tirora', 'pincode' => '441911'],
                ['area' => 'sadak-arjuni', 'pincode' => '441807'],
                ['area' => 'salekasa', 'pincode' => '441916']
            ]
        ],
        'manipur' => [
            'imphal-west' => [
                ['area' => 'imphal', 'pincode' => '795001'],
                ['area' => 'lamphelpat', 'pincode' => '795004'],
                ['area' => 'sagolband', 'pincode' => '795001'],
                ['area' => 'keishampat', 'pincode' => '795001']
            ],
            'imphal-east' => [
                ['area' => 'porompat', 'pincode' => '795005'],
                ['area' => 'lamlai', 'pincode' => '795140'],
                ['area' => 'jiribam', 'pincode' => '795116'],
                ['area' => 'sekmai', 'pincode' => '795106']
            ],
            'thoubal' => [
                ['area' => 'thoubal', 'pincode' => '795138'],
                ['area' => 'kakching', 'pincode' => '795103'],
                ['area' => 'lilong', 'pincode' => '795122'],
                ['area' => 'wangjing', 'pincode' => '795148']
            ],
            'bishnupur' => [
                ['area' => 'bishnupur', 'pincode' => '795126'],
                ['area' => 'moirang', 'pincode' => '795133'],
                ['area' => 'nambol', 'pincode' => '795134'],
                ['area' => 'kumbi', 'pincode' => '795135']
            ],
            'churachandpur' => [
                ['area' => 'churachandpur', 'pincode' => '795128'],
                ['area' => 'singngat', 'pincode' => '795129'],
                ['area' => 'tuibong', 'pincode' => '795130'],
                ['area' => 'thanlon', 'pincode' => '795131']
            ],
            'chandel' => [
                ['area' => 'chandel', 'pincode' => '795127'],
                ['area' => 'machi', 'pincode' => '795132'],
                ['area' => 'tengnoupal', 'pincode' => '795142'],
                ['area' => 'moreh', 'pincode' => '795131']
            ],
            'senapati' => [
                ['area' => 'senapati', 'pincode' => '795106'],
                ['area' => 'mao', 'pincode' => '795010'],
                ['area' => 'paomata', 'pincode' => '795136'],
                ['area' => 'kangpokpi', 'pincode' => '795129']
            ],
            'tamenglong' => [
                ['area' => 'tamenglong', 'pincode' => '795141'],
                ['area' => 'noney', 'pincode' => '795125'],
                ['area' => 'tousem', 'pincode' => '795143'],
                ['area' => 'tamei', 'pincode' => '795144']
            ],
            'ukhrul' => [
                ['area' => 'ukhrul', 'pincode' => '795142'],
                ['area' => 'chingai', 'pincode' => '795145'],
                ['area' => 'kamjong', 'pincode' => '795146'],
                ['area' => 'phungyar', 'pincode' => '795147']
            ],
            'kakching' => [
                ['area' => 'kakching', 'pincode' => '795103'],
                ['area' => 'waikhong', 'pincode' => '795149'],
                ['area' => 'sugnu', 'pincode' => '795150'],
                ['area' => 'pallel', 'pincode' => '795151']
            ],
            'jiribam' => [
                ['area' => 'jiribam', 'pincode' => '795116'],
                ['area' => 'borobekra', 'pincode' => '795117'],
                ['area' => 'tipaimukh', 'pincode' => '795118'],
                ['area' => 'parbung', 'pincode' => '795119']
            ],
            'tengnoupal' => [
                ['area' => 'tengnoupal', 'pincode' => '795142'],
                ['area' => 'moreh', 'pincode' => '795131'],
                ['area' => 'machi', 'pincode' => '795132'],
                ['area' => 'khongtal', 'pincode' => '795152']
            ],
            'pherzawl' => [
                ['area' => 'pherzawl', 'pincode' => '795129'],
                ['area' => 'tipaimukh', 'pincode' => '795118'],
                ['area' => 'saikot', 'pincode' => '795153'],
                ['area' => 'thanlon', 'pincode' => '795154']
            ],
            'noney' => [
                ['area' => 'noney', 'pincode' => '795125'],
                ['area' => 'longmai', 'pincode' => '795155'],
                ['area' => 'haochong', 'pincode' => '795156'],
                ['area' => 'khoupum', 'pincode' => '795157']
            ],
            'kangpokpi' => [
                ['area' => 'kangpokpi', 'pincode' => '795129'],
                ['area' => 'saitu', 'pincode' => '795158'],
                ['area' => 'saikul', 'pincode' => '795159'],
                ['area' => 'champhai', 'pincode' => '795160']
            ],
            'kamjong' => [
                ['area' => 'kamjong', 'pincode' => '795146'],
                ['area' => 'phungyar', 'pincode' => '795147'],
                ['area' => 'sahamphung', 'pincode' => '795161'],
                ['area' => 'kasom-khullen', 'pincode' => '795162']
            ]
        ],
        'meghalaya' => [
            'east-khasi-hills' => [
                ['area' => 'shillong', 'pincode' => '793001'],
                ['area' => 'police-bazar', 'pincode' => '793001'],
                ['area' => 'laitumkhrah', 'pincode' => '793003'],
                ['area' => 'nongthymmai', 'pincode' => '793014']
            ],
            'west-garo-hills' => [
                ['area' => 'tura', 'pincode' => '794001'],
                ['area' => 'dalu', 'pincode' => '794112'],
                ['area' => 'selsella', 'pincode' => '794113'],
                ['area' => 'dadenggiri', 'pincode' => '794114']
            ],
            'west-khasi-hills' => [
                ['area' => 'nongstoin', 'pincode' => '793119'],
                ['area' => 'mairang', 'pincode' => '793120'],
                ['area' => 'mawkyrwat', 'pincode' => '793121'],
                ['area' => 'ranikor', 'pincode' => '793108']
            ],
            'east-garo-hills' => [
                ['area' => 'williamnagar', 'pincode' => '794111'],
                ['area' => 'samanda', 'pincode' => '794104'],
                ['area' => 'songsak', 'pincode' => '794103'],
                ['area' => 'resubelpara', 'pincode' => '794108']
            ],
            'south-garo-hills' => [
                ['area' => 'baghmara', 'pincode' => '794102'],
                ['area' => 'gasuapara', 'pincode' => '794105'],
                ['area' => 'chokpot', 'pincode' => '794115'],
                ['area' => 'rongara', 'pincode' => '794106']
            ],
            'south-west-garo-hills' => [
                ['area' => 'ampati', 'pincode' => '794115'],
                ['area' => 'betasing', 'pincode' => '794116'],
                ['area' => 'mahendraganj', 'pincode' => '794106'],
                ['area' => 'zikzak', 'pincode' => '794117']
            ],
            'jaintia-hills' => [
                ['area' => 'jowai', 'pincode' => '793150'],
                ['area' => 'khliehriat', 'pincode' => '793200'],
                ['area' => 'amlarem', 'pincode' => '793110'],
                ['area' => 'thadlaskein', 'pincode' => '793151']
            ],
            'ri-bhoi' => [
                ['area' => 'nongpoh', 'pincode' => '793102'],
                ['area' => 'byrnihat', 'pincode' => '793101'],
                ['area' => 'umsning', 'pincode' => '793124'],
                ['area' => 'patharkhmah', 'pincode' => '793125']
            ],
            'south-west-khasi-hills' => [
                ['area' => 'mawkyrwat', 'pincode' => '793121'],
                ['area' => 'ranikor', 'pincode' => '793108'],
                ['area' => 'maharam', 'pincode' => '793122'],
                ['area' => 'riangdo', 'pincode' => '793123']
            ],
            'north-garo-hills' => [
                ['area' => 'resubelpara', 'pincode' => '794108'],
                ['area' => 'bajengdoba', 'pincode' => '794109'],
                ['area' => 'kharkutta', 'pincode' => '794118'],
                ['area' => 'mendipathar', 'pincode' => '794112']
            ],
            'eastern-west-khasi-hills' => [
                ['area' => 'mairang', 'pincode' => '793120'],
                ['area' => 'pynursla', 'pincode' => '793108'],
                ['area' => 'mawkyrwat', 'pincode' => '793121'],
                ['area' => 'shella-bholaganj', 'pincode' => '793109']
            ]
        ],
        'mizoram' => [
            'aizawl' => [
                ['area' => 'aizawl', 'pincode' => '796001'],
                ['area' => 'republic-veng', 'pincode' => '796001'],
                ['area' => 'chanmari', 'pincode' => '796007'],
                ['area' => 'durtlang', 'pincode' => '796025']
            ],
            'lunglei' => [
                ['area' => 'lunglei', 'pincode' => '796701'],
                ['area' => 'tlabung', 'pincode' => '796771'],
                ['area' => 'hnahthial', 'pincode' => '796751'],
                ['area' => 'lungsen', 'pincode' => '796761']
            ],
            'champhai' => [
                ['area' => 'champhai', 'pincode' => '796321'],
                ['area' => 'khawbung', 'pincode' => '796310'],
                ['area' => 'ngopa', 'pincode' => '796311'],
                ['area' => 'khawzawl', 'pincode' => '796310']
            ],
            'serchhip' => [
                ['area' => 'serchhip', 'pincode' => '796181'],
                ['area' => 'thenzawl', 'pincode' => '796186'],
                ['area' => 'north-vanlaiphai', 'pincode' => '796184'],
                ['area' => 'east-lungdar', 'pincode' => '796185']
            ],
            'kolasib' => [
                ['area' => 'kolasib', 'pincode' => '796081'],
                ['area' => 'vairengte', 'pincode' => '796087'],
                ['area' => 'bilkhawthlir', 'pincode' => '796086'],
                ['area' => 'thingdawl', 'pincode' => '796082']
            ],
            'mamit' => [
                ['area' => 'mamit', 'pincode' => '796441'],
                ['area' => 'west-phaileng', 'pincode' => '796442'],
                ['area' => 'reiek', 'pincode' => '796443'],
                ['area' => 'zawlnuam', 'pincode' => '796444']
            ],
            'lawngtlai' => [
                ['area' => 'lawngtlai', 'pincode' => '796891'],
                ['area' => 'sangau', 'pincode' => '796892'],
                ['area' => 'chawngte', 'pincode' => '796893'],
                ['area' => 'bungtlang-south', 'pincode' => '796894']
            ],
            'saiha' => [
                ['area' => 'saiha', 'pincode' => '796901'],
                ['area' => 'tuipang', 'pincode' => '796902'],
                ['area' => 'siaha', 'pincode' => '796901'],
                ['area' => 'lawngtlai', 'pincode' => '796891']
            ],
            'hnahthial' => [
                ['area' => 'hnahthial', 'pincode' => '796751'],
                ['area' => 'lawngtlai', 'pincode' => '796891'],
                ['area' => 'chawngte', 'pincode' => '796893'],
                ['area' => 'sangau', 'pincode' => '796892']
            ],
            'khawzawl' => [
                ['area' => 'khawzawl', 'pincode' => '796310'],
                ['area' => 'champhai', 'pincode' => '796321'],
                ['area' => 'ngopa', 'pincode' => '796311'],
                ['area' => 'vanlaiphai', 'pincode' => '796320']
            ],
            'saitual' => [
                ['area' => 'saitual', 'pincode' => '796261'],
                ['area' => 'phullen', 'pincode' => '796262'],
                ['area' => 'lengteng', 'pincode' => '796263'],
                ['area' => 'sateek', 'pincode' => '796264']
            ]
        ],
        'nagaland' => [
            'kohima' => [
                ['area' => 'kohima', 'pincode' => '797001'],
                ['area' => 'jakhama', 'pincode' => '797002'],
                ['area' => 'viswema', 'pincode' => '797003'],
                ['area' => 'tseminyu', 'pincode' => '797004']
            ],
            'dimapur' => [
                ['area' => 'dimapur', 'pincode' => '797112'],
                ['area' => 'chumukedima', 'pincode' => '797103'],
                ['area' => 'medziphema', 'pincode' => '797106'],
                ['area' => 'niuland', 'pincode' => '797107']
            ],
            'mokokchung' => [
                ['area' => 'mokokchung', 'pincode' => '798601'],
                ['area' => 'tuli', 'pincode' => '798621'],
                ['area' => 'changtongya', 'pincode' => '798622'],
                ['area' => 'mangkolemba', 'pincode' => '798623']
            ],
            'zunheboto' => [
                ['area' => 'zunheboto', 'pincode' => '798627'],
                ['area' => 'satakha', 'pincode' => '798628'],
                ['area' => 'akuluto', 'pincode' => '798629'],
                ['area' => 'aghunato', 'pincode' => '798630']
            ],
            'tuensang' => [
                ['area' => 'tuensang', 'pincode' => '798612'],
                ['area' => 'kiphire', 'pincode' => '798613'],
                ['area' => 'noklak', 'pincode' => '798614'],
                ['area' => 'shamator', 'pincode' => '798615']
            ],
            'wokha' => [
                ['area' => 'wokha', 'pincode' => '797111'],
                ['area' => 'bhandari', 'pincode' => '797113'],
                ['area' => 'sanis', 'pincode' => '797114'],
                ['area' => 'changpang', 'pincode' => '797115']
            ],
            'mon' => [
                ['area' => 'mon', 'pincode' => '798621'],
                ['area' => 'longleng', 'pincode' => '798625'],
                ['area' => 'tizit', 'pincode' => '798626'],
                ['area' => 'chen', 'pincode' => '798627']
            ],
            'phek' => [
                ['area' => 'phek', 'pincode' => '797108'],
                ['area' => 'pfutsero', 'pincode' => '797109'],
                ['area' => 'chozuba', 'pincode' => '797110'],
                ['area' => 'meluri', 'pincode' => '797111']
            ],
            'peren' => [
                ['area' => 'peren', 'pincode' => '797117'],
                ['area' => 'jalukie', 'pincode' => '797118'],
                ['area' => 'tening', 'pincode' => '797119'],
                ['area' => 'athibung', 'pincode' => '797120']
            ],
            'kiphire' => [
                ['area' => 'kiphire', 'pincode' => '798613'],
                ['area' => 'pungro', 'pincode' => '798616'],
                ['area' => 'longmatra', 'pincode' => '798617'],
                ['area' => 'sitimi', 'pincode' => '798618']
            ],
            'longleng' => [
                ['area' => 'longleng', 'pincode' => '798625'],
                ['area' => 'tamlu', 'pincode' => '798631'],
                ['area' => 'sakshi', 'pincode' => '798632'],
                ['area' => 'yongya', 'pincode' => '798633']
            ],
            'noklak' => [
                ['area' => 'noklak', 'pincode' => '798614'],
                ['area' => 'tuensang', 'pincode' => '798612'],
                ['area' => 'pangsha', 'pincode' => '798634'],
                ['area' => 'thonoknyu', 'pincode' => '798635']
            ]
        ],
        'odisha' => [
            'khordha' => [
                ['area' => 'bhubaneswar', 'pincode' => '751001'],
                ['area' => 'unit-1', 'pincode' => '751001'],
                ['area' => 'sahid-nagar', 'pincode' => '751007'],
                ['area' => 'patia', 'pincode' => '751024']
            ],
            'cuttack' => [
                ['area' => 'cuttack', 'pincode' => '753001'],
                ['area' => 'badambadi', 'pincode' => '753009'],
                ['area' => 'bidanasi', 'pincode' => '753014'],
                ['area' => 'choudwar', 'pincode' => '754025']
            ],
            'ganjam' => [
                ['area' => 'berhampur', 'pincode' => '760001'],
                ['area' => 'gopalpur', 'pincode' => '761002'],
                ['area' => 'chhatrapur', 'pincode' => '761020'],
                ['area' => 'aska', 'pincode' => '761110']
            ],
            'puri' => [
                ['area' => 'puri', 'pincode' => '752001'],
                ['area' => 'jagannath-temple', 'pincode' => '752001'],
                ['area' => 'konark', 'pincode' => '752111'],
                ['area' => 'pipili', 'pincode' => '752104']
            ],
            'balasore' => [
                ['area' => 'balasore', 'pincode' => '756001'],
                ['area' => 'jaleswar', 'pincode' => '756032'],
                ['area' => 'basta', 'pincode' => '756029'],
                ['area' => 'soro', 'pincode' => '756045']
            ],
            'bhadrak' => [
                ['area' => 'bhadrak', 'pincode' => '756100'],
                ['area' => 'chandbali', 'pincode' => '756133'],
                ['area' => 'dhamnagar', 'pincode' => '756117'],
                ['area' => 'tihidi', 'pincode' => '756130']
            ],
            'jajpur' => [
                ['area' => 'jajpur', 'pincode' => '755001'],
                ['area' => 'vyasanagar', 'pincode' => '755019'],
                ['area' => 'jajpur-road', 'pincode' => '755019'],
                ['area' => 'dharmasala', 'pincode' => '755014']
            ],
            'kendrapara' => [
                ['area' => 'kendrapara', 'pincode' => '754211'],
                ['area' => 'pattamundai', 'pincode' => '754215'],
                ['area' => 'aul', 'pincode' => '754219'],
                ['area' => 'rajnagar', 'pincode' => '754220']
            ],
            'jagatsinghpur' => [
                ['area' => 'jagatsinghpur', 'pincode' => '754103'],
                ['area' => 'paradip', 'pincode' => '754142'],
                ['area' => 'tirtol', 'pincode' => '754138'],
                ['area' => 'balikuda', 'pincode' => '754108']
            ],
            'nayagarh' => [
                ['area' => 'nayagarh', 'pincode' => '752069'],
                ['area' => 'odagaon', 'pincode' => '752077'],
                ['area' => 'ranpur', 'pincode' => '752026'],
                ['area' => 'khandapara', 'pincode' => '752085']
            ],
            'dhenkanal' => [
                ['area' => 'dhenkanal', 'pincode' => '759001'],
                ['area' => 'kamakhyanagar', 'pincode' => '759018'],
                ['area' => 'hindol', 'pincode' => '759022'],
                ['area' => 'bhuban', 'pincode' => '759017']
            ],
            'angul' => [
                ['area' => 'angul', 'pincode' => '759122'],
                ['area' => 'talcher', 'pincode' => '759100'],
                ['area' => 'pallahara', 'pincode' => '759119'],
                ['area' => 'banarpal', 'pincode' => '759123']
            ],
            'sambalpur' => [
                ['area' => 'sambalpur', 'pincode' => '768001'],
                ['area' => 'burla', 'pincode' => '768017'],
                ['area' => 'rairakhol', 'pincode' => '768110'],
                ['area' => 'kuchinda', 'pincode' => '768222']
            ],
            'sonepur' => [
                ['area' => 'sonepur', 'pincode' => '767017'],
                ['area' => 'birmaharajpur', 'pincode' => '767020'],
                ['area' => 'dunguripali', 'pincode' => '767029'],
                ['area' => 'ullunda', 'pincode' => '767018']
            ],
            'bargarh' => [
                ['area' => 'bargarh', 'pincode' => '768028'],
                ['area' => 'padampur', 'pincode' => '768036'],
                ['area' => 'barpali', 'pincode' => '768029'],
                ['area' => 'attabira', 'pincode' => '768027']
            ],
            'jharsuguda' => [
                ['area' => 'jharsuguda', 'pincode' => '768201'],
                ['area' => 'brajrajnagar', 'pincode' => '768216'],
                ['area' => 'belpahar', 'pincode' => '768217'],
                ['area' => 'kolabira', 'pincode' => '768211']
            ],
            'deogarh' => [
                ['area' => 'deogarh', 'pincode' => '768108'],
                ['area' => 'barkote', 'pincode' => '768109'],
                ['area' => 'reamal', 'pincode' => '768105'],
                ['area' => 'tileibani', 'pincode' => '768110']
            ],
            'sundargarh' => [
                ['area' => 'sundargarh', 'pincode' => '770001'],
                ['area' => 'rourkela', 'pincode' => '769001'],
                ['area' => 'rajgangpur', 'pincode' => '770017'],
                ['area' => 'panposh', 'pincode' => '770022']
            ],
            'mayurbhanj' => [
                ['area' => 'baripada', 'pincode' => '757001'],
                ['area' => 'karanjia', 'pincode' => '757037'],
                ['area' => 'rairangpur', 'pincode' => '757043'],
                ['area' => 'udala', 'pincode' => '757041']
            ],
            'keonjhar' => [
                ['area' => 'keonjhar', 'pincode' => '758001'],
                ['area' => 'anandapur', 'pincode' => '758021'],
                ['area' => 'barbil', 'pincode' => '758035'],
                ['area' => 'champua', 'pincode' => '758041']
            ],
            'kendujhar' => [
                ['area' => 'kendujhar', 'pincode' => '758002'],
                ['area' => 'ghasipura', 'pincode' => '758014'],
                ['area' => 'saharpada', 'pincode' => '758043'],
                ['area' => 'patna', 'pincode' => '758032']
            ],
            'balangir' => [
                ['area' => 'balangir', 'pincode' => '767001'],
                ['area' => 'titlagarh', 'pincode' => '767033'],
                ['area' => 'patnagarh', 'pincode' => '767025'],
                ['area' => 'kantabanji', 'pincode' => '767039']
            ],
            'nuapada' => [
                ['area' => 'nuapada', 'pincode' => '766105'],
                ['area' => 'khariar', 'pincode' => '766107'],
                ['area' => 'komna', 'pincode' => '766106'],
                ['area' => 'sinapali', 'pincode' => '766108']
            ],
            'kalahandi' => [
                ['area' => 'bhawanipatna', 'pincode' => '766001'],
                ['area' => 'dharmagarh', 'pincode' => '766015'],
                ['area' => 'junagarh', 'pincode' => '766014'],
                ['area' => 'kesinga', 'pincode' => '766012']
            ],
            'rayagada' => [
                ['area' => 'rayagada', 'pincode' => '765001'],
                ['area' => 'gunupur', 'pincode' => '765022'],
                ['area' => 'bissam-cuttack', 'pincode' => '765017'],
                ['area' => 'muniguda', 'pincode' => '765020']
            ],
            'nabarangpur' => [
                ['area' => 'nabarangpur', 'pincode' => '764059'],
                ['area' => 'umerkote', 'pincode' => '764073'],
                ['area' => 'dabugam', 'pincode' => '764056'],
                ['area' => 'papadahandi', 'pincode' => '764045']
            ],
            'koraput' => [
                ['area' => 'koraput', 'pincode' => '764020'],
                ['area' => 'jeypore', 'pincode' => '764001'],
                ['area' => 'kotpad', 'pincode' => '764026'],
                ['area' => 'damanjodi', 'pincode' => '763008']
            ],
            'malkangiri' => [
                ['area' => 'malkangiri', 'pincode' => '764045'],
                ['area' => 'motu', 'pincode' => '764047'],
                ['area' => 'mathili', 'pincode' => '764087'],
                ['area' => 'kalimela', 'pincode' => '764046']
            ],
            'gajapati' => [
                ['area' => 'paralakhemundi', 'pincode' => '761200'],
                ['area' => 'kashinagar', 'pincode' => '761013'],
                ['area' => 'r-udayagiri', 'pincode' => '761016'],
                ['area' => 'gosani', 'pincode' => '761211']
            ],
            'kandhamal' => [
                ['area' => 'phulbani', 'pincode' => '762001'],
                ['area' => 'g-udayagiri', 'pincode' => '762100'],
                ['area' => 'baliguda', 'pincode' => '762103'],
                ['area' => 'phiringia', 'pincode' => '762012']
            ],
            'boudh' => [
                ['area' => 'boudh', 'pincode' => '762014'],
                ['area' => 'kantamal', 'pincode' => '762013'],
                ['area' => 'harabhanga', 'pincode' => '762015'],
                ['area' => 'puruna-katak', 'pincode' => '762016']
            ]
        ],
        'punjab' => [
            'ludhiana' => [
                ['area' => 'ludhiana', 'pincode' => '141001'],
                ['area' => 'civil-lines', 'pincode' => '141001'],
                ['area' => 'model-town', 'pincode' => '141002'],
                ['area' => 'sarabha-nagar', 'pincode' => '141001']
            ],
            'amritsar' => [
                ['area' => 'amritsar', 'pincode' => '143001'],
                ['area' => 'golden-temple', 'pincode' => '143006'],
                ['area' => 'ranjit-avenue', 'pincode' => '143001'],
                ['area' => 'majitha-road', 'pincode' => '143001']
            ],
            'jalandhar' => [
                ['area' => 'jalandhar', 'pincode' => '144001'],
                ['area' => 'model-town', 'pincode' => '144003'],
                ['area' => 'civil-lines', 'pincode' => '144001'],
                ['area' => 'cantonment', 'pincode' => '144005']
            ],
            'patiala' => [
                ['area' => 'patiala', 'pincode' => '147001'],
                ['area' => 'urban-estate', 'pincode' => '147002'],
                ['area' => 'leela-bhawan', 'pincode' => '147001'],
                ['area' => 'rajpura', 'pincode' => '140401']
            ],
            'bathinda' => [
                ['area' => 'bathinda', 'pincode' => '151001'],
                ['area' => 'goniana', 'pincode' => '151201'],
                ['area' => 'talwandi-sabo', 'pincode' => '151302'],
                ['area' => 'rampura-phul', 'pincode' => '151103']
            ],
            'mohali' => [
                ['area' => 'mohali', 'pincode' => '160055'],
                ['area' => 'phase-7', 'pincode' => '160062'],
                ['area' => 'kharar', 'pincode' => '140301'],
                ['area' => 'kurali', 'pincode' => '140103']
            ],
            'hoshiarpur' => [
                ['area' => 'hoshiarpur', 'pincode' => '146001'],
                ['area' => 'dasuya', 'pincode' => '144205'],
                ['area' => 'mukerian', 'pincode' => '144211'],
                ['area' => 'garhshankar', 'pincode' => '144527']
            ],
            'kapurthala' => [
                ['area' => 'kapurthala', 'pincode' => '144601'],
                ['area' => 'phagwara', 'pincode' => '144401'],
                ['area' => 'sultanpur-lodhi', 'pincode' => '144626'],
                ['area' => 'bholath', 'pincode' => '144201']
            ],
            'ferozepur' => [
                ['area' => 'ferozepur', 'pincode' => '152002'],
                ['area' => 'zira', 'pincode' => '142047'],
                ['area' => 'fazilka', 'pincode' => '152123'],
                ['area' => 'abohar', 'pincode' => '152116']
            ],
            'fazilka' => [
                ['area' => 'fazilka', 'pincode' => '152123'],
                ['area' => 'jalalabad', 'pincode' => '152024'],
                ['area' => 'abohar', 'pincode' => '152116'],
                ['area' => 'arniwala', 'pincode' => '152132']
            ],
            'muktsar' => [
                ['area' => 'muktsar', 'pincode' => '152026'],
                ['area' => 'malout', 'pincode' => '152107'],
                ['area' => 'giddarbaha', 'pincode' => '152101'],
                ['area' => 'lambi', 'pincode' => '152132']
            ],
            'moga' => [
                ['area' => 'moga', 'pincode' => '142001'],
                ['area' => 'nihal-singh-wala', 'pincode' => '142052'],
                ['area' => 'baghapurana', 'pincode' => '142038'],
                ['area' => 'dharamkot', 'pincode' => '142055']
            ],
            'faridkot' => [
                ['area' => 'faridkot', 'pincode' => '151203'],
                ['area' => 'kotkapura', 'pincode' => '151204'],
                ['area' => 'jaitu', 'pincode' => '151202'],
                ['area' => 'faridkot-city', 'pincode' => '151001']
            ],
            'mansa' => [
                ['area' => 'mansa', 'pincode' => '151505'],
                ['area' => 'budhlada', 'pincode' => '151502'],
                ['area' => 'sardulgarh', 'pincode' => '151507'],
                ['area' => 'baretta', 'pincode' => '151501']
            ],
            'sangrur' => [
                ['area' => 'sangrur', 'pincode' => '148001'],
                ['area' => 'sunam', 'pincode' => '148028'],
                ['area' => 'malerkotla', 'pincode' => '148023'],
                ['area' => 'dhuri', 'pincode' => '148024']
            ],
            'barnala' => [
                ['area' => 'barnala', 'pincode' => '148101'],
                ['area' => 'tapa', 'pincode' => '148108'],
                ['area' => 'sehna', 'pincode' => '148107'],
                ['area' => 'mehal-kalan', 'pincode' => '148102']
            ],
            'fatehgarh-sahib' => [
                ['area' => 'fatehgarh-sahib', 'pincode' => '140406'],
                ['area' => 'sirhind', 'pincode' => '140406'],
                ['area' => 'mandi-gobindgarh', 'pincode' => '147301'],
                ['area' => 'bassi-pathana', 'pincode' => '140412']
            ],
            'rupnagar' => [
                ['area' => 'rupnagar', 'pincode' => '140001'],
                ['area' => 'anandpur-sahib', 'pincode' => '140118'],
                ['area' => 'chamkaur-sahib', 'pincode' => '140112'],
                ['area' => 'nangal', 'pincode' => '140124']
            ],
            'pathankot' => [
                ['area' => 'pathankot', 'pincode' => '145001'],
                ['area' => 'sujanpur', 'pincode' => '145023'],
                ['area' => 'gurdaspur', 'pincode' => '143521'],
                ['area' => 'dharkalan', 'pincode' => '145029']
            ],
            'gurdaspur' => [
                ['area' => 'gurdaspur', 'pincode' => '143521'],
                ['area' => 'batala', 'pincode' => '143505'],
                ['area' => 'dera-baba-nanak', 'pincode' => '143604'],
                ['area' => 'dinanagar', 'pincode' => '143531']
            ],
            'tarn-taran' => [
                ['area' => 'tarn-taran', 'pincode' => '143401'],
                ['area' => 'patti', 'pincode' => '143416'],
                ['area' => 'khadur-sahib', 'pincode' => '143117'],
                ['area' => 'goindwal', 'pincode' => '143115']
            ],
            'nawanshahr' => [
                ['area' => 'nawanshahr', 'pincode' => '144514'],
                ['area' => 'balachaur', 'pincode' => '144521'],
                ['area' => 'banga', 'pincode' => '144505'],
                ['area' => 'sardulgarh', 'pincode' => '144533']
            ],
            'malerkotla' => [
                ['area' => 'malerkotla', 'pincode' => '148023'],
                ['area' => 'amargarh', 'pincode' => '148022'],
                ['area' => 'ahmedgarh', 'pincode' => '148021'],
                ['area' => 'moonak', 'pincode' => '148024']
            ]
        ],
        'rajasthan' => [
            'jaipur' => [
                ['area' => 'jaipur', 'pincode' => '302001'],
                ['area' => 'pink-city', 'pincode' => '302002'],
                ['area' => 'c-scheme', 'pincode' => '302001'],
                ['area' => 'malviya-nagar', 'pincode' => '302017'],
                ['area' => 'vaishali-nagar', 'pincode' => '302021']
            ],
            'jodhpur' => [
                ['area' => 'jodhpur', 'pincode' => '342001'],
                ['area' => 'ratanada', 'pincode' => '342011'],
                ['area' => 'paota', 'pincode' => '342006'],
                ['area' => 'sardarpura', 'pincode' => '342003']
            ],
            'udaipur' => [
                ['area' => 'udaipur', 'pincode' => '313001'],
                ['area' => 'city-palace', 'pincode' => '313001'],
                ['area' => 'fateh-sagar', 'pincode' => '313001'],
                ['area' => 'sukhadia-circle', 'pincode' => '313001']
            ],
            'kota' => [
                ['area' => 'kota', 'pincode' => '324001'],
                ['area' => 'vigyan-nagar', 'pincode' => '324005'],
                ['area' => 'dadabari', 'pincode' => '324009'],
                ['area' => 'mahaveer-nagar', 'pincode' => '324007']
            ],
            'ajmer' => [
                ['area' => 'ajmer', 'pincode' => '305001'],
                ['area' => 'dargah-sharif', 'pincode' => '305001'],
                ['area' => 'vaishali-nagar', 'pincode' => '305004'],
                ['area' => 'pushkar', 'pincode' => '305022']
            ],
            'bikaner' => [
                ['area' => 'bikaner', 'pincode' => '334001'],
                ['area' => 'rani-bazar', 'pincode' => '334005'],
                ['area' => 'gang-shahar', 'pincode' => '334001'],
                ['area' => 'nokha', 'pincode' => '334803']
            ],
            'alwar' => [
                ['area' => 'alwar', 'pincode' => '301001'],
                ['area' => 'behror', 'pincode' => '301701'],
                ['area' => 'tijara', 'pincode' => '301411'],
                ['area' => 'rajgarh', 'pincode' => '301408']
            ],
            'bharatpur' => [
                ['area' => 'bharatpur', 'pincode' => '321001'],
                ['area' => 'deeg', 'pincode' => '321203'],
                ['area' => 'kumher', 'pincode' => '321201'],
                ['area' => 'nadbai', 'pincode' => '321602']
            ],
            'dholpur' => [
                ['area' => 'dholpur', 'pincode' => '328001'],
                ['area' => 'bari', 'pincode' => '328021'],
                ['area' => 'baseri', 'pincode' => '328022'],
                ['area' => 'rajakhera', 'pincode' => '328024']
            ],
            'karauli' => [
                ['area' => 'karauli', 'pincode' => '322241'],
                ['area' => 'hindaun', 'pincode' => '322230'],
                ['area' => 'todabhim', 'pincode' => '322214'],
                ['area' => 'nadoti', 'pincode' => '322220']
            ],
            'sawai-madhopur' => [
                ['area' => 'sawai-madhopur', 'pincode' => '322001'],
                ['area' => 'gangapur-city', 'pincode' => '322201'],
                ['area' => 'bonli', 'pincode' => '322026'],
                ['area' => 'khanda', 'pincode' => '322023']
            ],
            'dausa' => [
                ['area' => 'dausa', 'pincode' => '303303'],
                ['area' => 'lalsot', 'pincode' => '303511'],
                ['area' => 'bandikui', 'pincode' => '303313'],
                ['area' => 'mahwa', 'pincode' => '321608']
            ],
            'tonk' => [
                ['area' => 'tonk', 'pincode' => '304001'],
                ['area' => 'newai', 'pincode' => '304021'],
                ['area' => 'deoli', 'pincode' => '304804'],
                ['area' => 'malpura', 'pincode' => '304502']
            ],
            'bundi' => [
                ['area' => 'bundi', 'pincode' => '323001'],
                ['area' => 'keshoraipatan', 'pincode' => '323602'],
                ['area' => 'indragarh', 'pincode' => '323603'],
                ['area' => 'hindoli', 'pincode' => '323024']
            ],
            'bhilwara' => [
                ['area' => 'bhilwara', 'pincode' => '311001'],
                ['area' => 'shahpura', 'pincode' => '311028'],
                ['area' => 'mandal', 'pincode' => '311604'],
                ['area' => 'hurda', 'pincode' => '311022']
            ],
            'chittorgarh' => [
                ['area' => 'chittorgarh', 'pincode' => '312001'],
                ['area' => 'nimbahera', 'pincode' => '312601'],
                ['area' => 'kapasan', 'pincode' => '312202'],
                ['area' => 'begun', 'pincode' => '312023']
            ],
            'rajsamand' => [
                ['area' => 'rajsamand', 'pincode' => '313324'],
                ['area' => 'kumbhalgarh', 'pincode' => '313325'],
                ['area' => 'nathdwara', 'pincode' => '313301'],
                ['area' => 'amet', 'pincode' => '313332']
            ],
            'dungarpur' => [
                ['area' => 'dungarpur', 'pincode' => '314001'],
                ['area' => 'sagwara', 'pincode' => '314025'],
                ['area' => 'aspur', 'pincode' => '314021'],
                ['area' => 'simalwara', 'pincode' => '314403']
            ],
            'banswara' => [
                ['area' => 'banswara', 'pincode' => '327001'],
                ['area' => 'kushalgarh', 'pincode' => '327801'],
                ['area' => 'ghatol', 'pincode' => '327025'],
                ['area' => 'sajjangarh', 'pincode' => '327601']
            ],
            'pratapgarh' => [
                ['area' => 'pratapgarh', 'pincode' => '312605'],
                ['area' => 'arnod', 'pincode' => '312615'],
                ['area' => 'chhoti-sadri', 'pincode' => '312604'],
                ['area' => 'dhariawad', 'pincode' => '312601']
            ],
            'jhalawar' => [
                ['area' => 'jhalawar', 'pincode' => '326001'],
                ['area' => 'aklera', 'pincode' => '326033'],
                ['area' => 'khanpur', 'pincode' => '326038'],
                ['area' => 'manoharthana', 'pincode' => '326037']
            ],
            'baran' => [
                ['area' => 'baran', 'pincode' => '325205'],
                ['area' => 'atru', 'pincode' => '325218'],
                ['area' => 'chhipabarod', 'pincode' => '325220'],
                ['area' => 'kishanganj', 'pincode' => '325216']
            ],
            'sikar' => [
                ['area' => 'sikar', 'pincode' => '332001'],
                ['area' => 'fatehpur', 'pincode' => '332301'],
                ['area' => 'sri-madhopur', 'pincode' => '332715'],
                ['area' => 'danta-ramgarh', 'pincode' => '332702']
            ],
            'jhunjhunu' => [
                ['area' => 'jhunjhunu', 'pincode' => '333001'],
                ['area' => 'chirawa', 'pincode' => '333026'],
                ['area' => 'nawalgarh', 'pincode' => '333042'],
                ['area' => 'khetri', 'pincode' => '333504']
            ],
            'churu' => [
                ['area' => 'churu', 'pincode' => '331001'],
                ['area' => 'sardarshahar', 'pincode' => '331403'],
                ['area' => 'ratangarh', 'pincode' => '331022'],
                ['area' => 'sujangarh', 'pincode' => '331507']
            ],
            'nagaur' => [
                ['area' => 'nagaur', 'pincode' => '341001'],
                ['area' => 'makrana', 'pincode' => '341505'],
                ['area' => 'didwana', 'pincode' => '341303'],
                ['area' => 'merta-city', 'pincode' => '341510']
            ],
            'pali' => [
                ['area' => 'pali', 'pincode' => '306001'],
                ['area' => 'sojat', 'pincode' => '306104'],
                ['area' => 'marwar-junction', 'pincode' => '306302'],
                ['area' => 'bali', 'pincode' => '306701']
            ],
            'sirohi' => [
                ['area' => 'sirohi', 'pincode' => '307001'],
                ['area' => 'mount-abu', 'pincode' => '307501'],
                ['area' => 'pindwara', 'pincode' => '307023'],
                ['area' => 'reodar', 'pincode' => '307028']
            ],
            'jalore' => [
                ['area' => 'jalore', 'pincode' => '343001'],
                ['area' => 'bhinmal', 'pincode' => '343029'],
                ['area' => 'raniwara', 'pincode' => '343040'],
                ['area' => 'sanchore', 'pincode' => '343041']
            ],
            'barmer' => [
                ['area' => 'barmer', 'pincode' => '344001'],
                ['area' => 'balotra', 'pincode' => '344022'],
                ['area' => 'jasol', 'pincode' => '344024'],
                ['area' => 'siwana', 'pincode' => '344044']
            ],
            'jaisalmer' => [
                ['area' => 'jaisalmer', 'pincode' => '345001'],
                ['area' => 'pokaran', 'pincode' => '345021'],
                ['area' => 'sam', 'pincode' => '345001'],
                ['area' => 'ramgarh', 'pincode' => '345027']
            ],
            'hanumangarh' => [
                ['area' => 'hanumangarh', 'pincode' => '335512'],
                ['area' => 'nohar', 'pincode' => '335523'],
                ['area' => 'pilibanga', 'pincode' => '335803'],
                ['area' => 'sangaria', 'pincode' => '335063']
            ],
            'sri-ganganagar' => [
                ['area' => 'sri-ganganagar', 'pincode' => '335001'],
                ['area' => 'anupgarh', 'pincode' => '335701'],
                ['area' => 'suratgarh', 'pincode' => '335804'],
                ['area' => 'padampur', 'pincode' => '335041']
            ]
        ],
        'sikkim' => [
            'east-sikkim' => [
                ['area' => 'gangtok', 'pincode' => '737101'],
                ['area' => 'ranipool', 'pincode' => '737135'],
                ['area' => 'singtam', 'pincode' => '737134'],
                ['area' => 'tadong', 'pincode' => '737102']
            ],
            'west-sikkim' => [
                ['area' => 'geyzing', 'pincode' => '737111'],
                ['area' => 'jorethang', 'pincode' => '737121'],
                ['area' => 'pelling', 'pincode' => '737113'],
                ['area' => 'dentam', 'pincode' => '737112']
            ],
            'north-sikkim' => [
                ['area' => 'mangan', 'pincode' => '737116'],
                ['area' => 'chungthang', 'pincode' => '737117'],
                ['area' => 'lachen', 'pincode' => '737120'],
                ['area' => 'lachung', 'pincode' => '737119']
            ],
            'south-sikkim' => [
                ['area' => 'namchi', 'pincode' => '737126'],
                ['area' => 'jorethang', 'pincode' => '737121'],
                ['area' => 'melli', 'pincode' => '737123'],
                ['area' => 'ravangla', 'pincode' => '737139']
            ]
        ],
        'telangana' => [
            'hyderabad' => [
                ['area' => 'hyderabad', 'pincode' => '500001'],
                ['area' => 'secunderabad', 'pincode' => '500003'],
                ['area' => 'banjara-hills', 'pincode' => '500034'],
                ['area' => 'jubilee-hills', 'pincode' => '500033'],
                ['area' => 'hitech-city', 'pincode' => '500081'],
                ['area' => 'gachibowli', 'pincode' => '500032']
            ],
            'warangal-urban' => [
                ['area' => 'warangal', 'pincode' => '506002'],
                ['area' => 'kazipet', 'pincode' => '506003'],
                ['area' => 'subedari', 'pincode' => '506001'],
                ['area' => 'hanamkonda', 'pincode' => '506001']
            ],
            'khammam' => [
                ['area' => 'khammam', 'pincode' => '507001'],
                ['area' => 'kothagudem', 'pincode' => '507101'],
                ['area' => 'yellandu', 'pincode' => '507123'],
                ['area' => 'manuguru', 'pincode' => '507117']
            ],
            'nizamabad' => [
                ['area' => 'nizamabad', 'pincode' => '503001'],
                ['area' => 'bodhan', 'pincode' => '503185'],
                ['area' => 'kamareddy', 'pincode' => '503111'],
                ['area' => 'armoor', 'pincode' => '503224']
            ],
            'warangal-rural' => [
                ['area' => 'narsampet', 'pincode' => '506132'],
                ['area' => 'parkal', 'pincode' => '506164'],
                ['area' => 'duggondi', 'pincode' => '506330'],
                ['area' => 'chennaraopet', 'pincode' => '506145']
            ],
            'karimnagar' => [
                ['area' => 'karimnagar', 'pincode' => '505001'],
                ['area' => 'jagtial', 'pincode' => '505327'],
                ['area' => 'huzurabad', 'pincode' => '505468'],
                ['area' => 'sircilla', 'pincode' => '505301']
            ],
            'peddapalli' => [
                ['area' => 'peddapalli', 'pincode' => '505172'],
                ['area' => 'ramagundam', 'pincode' => '505208'],
                ['area' => 'manthani', 'pincode' => '505184'],
                ['area' => 'sultanabad', 'pincode' => '505210']
            ],
            'jagtial' => [
                ['area' => 'jagtial', 'pincode' => '505327'],
                ['area' => 'koratla', 'pincode' => '505452'],
                ['area' => 'metpalli', 'pincode' => '505325'],
                ['area' => 'dharmapuri', 'pincode' => '505472']
            ],
            'rajanna-sircilla' => [
                ['area' => 'sircilla', 'pincode' => '505301'],
                ['area' => 'vemulawada', 'pincode' => '505302'],
                ['area' => 'yellareddypet', 'pincode' => '505460'],
                ['area' => 'gambhiraopet', 'pincode' => '505305']
            ],
            'adilabad' => [
                ['area' => 'adilabad', 'pincode' => '504001'],
                ['area' => 'mancherial', 'pincode' => '504208'],
                ['area' => 'nirmal', 'pincode' => '504106'],
                ['area' => 'utnoor', 'pincode' => '504313']
            ],
            'mancherial' => [
                ['area' => 'mancherial', 'pincode' => '504208'],
                ['area' => 'bellampalli', 'pincode' => '504251'],
                ['area' => 'mandamarri', 'pincode' => '504231'],
                ['area' => 'kyathampalli', 'pincode' => '504218']
            ],
            'nirmal' => [
                ['area' => 'nirmal', 'pincode' => '504106'],
                ['area' => 'khanapur', 'pincode' => '504203'],
                ['area' => 'bhainsa', 'pincode' => '504103'],
                ['area' => 'sarangapur', 'pincode' => '504293']
            ],
            'kamareddy' => [
                ['area' => 'kamareddy', 'pincode' => '503111'],
                ['area' => 'banswada', 'pincode' => '503187'],
                ['area' => 'yellareddy', 'pincode' => '503181'],
                ['area' => 'pitlam', 'pincode' => '503185']
            ],
            'medak' => [
                ['area' => 'sangareddy', 'pincode' => '502001'],
                ['area' => 'medak', 'pincode' => '502110'],
                ['area' => 'narsapur', 'pincode' => '502313'],
                ['area' => 'jogipet', 'pincode' => '502114']
            ],
            'siddipet' => [
                ['area' => 'siddipet', 'pincode' => '502103'],
                ['area' => 'dubbak', 'pincode' => '502109'],
                ['area' => 'gajwel', 'pincode' => '502278'],
                ['area' => 'husnabad', 'pincode' => '505467']
            ],
            'medchal-malkajgiri' => [
                ['area' => 'medchal', 'pincode' => '501401'],
                ['area' => 'kompally', 'pincode' => '500014'],
                ['area' => 'alwal', 'pincode' => '500010'],
                ['area' => 'malkajgiri', 'pincode' => '500047']
            ],
            'rangareddy' => [
                ['area' => 'lbr-nagar', 'pincode' => '500074'],
                ['area' => 'shamshabad', 'pincode' => '501218'],
                ['area' => 'vikarabad', 'pincode' => '501101'],
                ['area' => 'chevella', 'pincode' => '501503']
            ],
            'vikarabad' => [
                ['area' => 'vikarabad', 'pincode' => '501101'],
                ['area' => 'kodangal', 'pincode' => '509128'],
                ['area' => 'tandur', 'pincode' => '501141'],
                ['area' => 'bantwaram', 'pincode' => '501203']
            ],
            'sangareddy' => [
                ['area' => 'sangareddy', 'pincode' => '502001'],
                ['area' => 'zaheerabad', 'pincode' => '502220'],
                ['area' => 'patancheru', 'pincode' => '502319'],
                ['area' => 'narayankhed', 'pincode' => '502286']
            ],
            'mahabubnagar' => [
                ['area' => 'mahabubnagar', 'pincode' => '509001'],
                ['area' => 'gadwal', 'pincode' => '509125'],
                ['area' => 'wanaparthy', 'pincode' => '509103'],
                ['area' => 'nagarkurnool', 'pincode' => '509209']
            ],
            'nagarkurnool' => [
                ['area' => 'nagarkurnool', 'pincode' => '509209'],
                ['area' => 'achampet', 'pincode' => '509375'],
                ['area' => 'kollapur', 'pincode' => '509337'],
                ['area' => 'urkonda', 'pincode' => '509338']
            ],
            'wanaparthy' => [
                ['area' => 'wanaparthy', 'pincode' => '509103'],
                ['area' => 'pebbair', 'pincode' => '509104'],
                ['area' => 'atmakur', 'pincode' => '509128'],
                ['area' => 'kothakota', 'pincode' => '509129']
            ],
            'jogulamba-gadwal' => [
                ['area' => 'gadwal', 'pincode' => '509125'],
                ['area' => 'alampur', 'pincode' => '509152'],
                ['area' => 'itikyal', 'pincode' => '509203'],
                ['area' => 'maldakal', 'pincode' => '509204']
            ],
            'nalgonda' => [
                ['area' => 'nalgonda', 'pincode' => '508001'],
                ['area' => 'miryalaguda', 'pincode' => '508207'],
                ['area' => 'suryapet', 'pincode' => '508213'],
                ['area' => 'devarakonda', 'pincode' => '508248']
            ],
            'suryapet' => [
                ['area' => 'suryapet', 'pincode' => '508213'],
                ['area' => 'kodad', 'pincode' => '508206'],
                ['area' => 'huzurnagar', 'pincode' => '508204'],
                ['area' => 'mothkur', 'pincode' => '508217']
            ],
            'yadadri-bhuvanagiri' => [
                ['area' => 'bhongir', 'pincode' => '508116'],
                ['area' => 'yadagirigutta', 'pincode' => '508115'],
                ['area' => 'alair', 'pincode' => '508111'],
                ['area' => 'bommalaramaram', 'pincode' => '508114']
            ],
            'bhadradri-kothagudem' => [
                ['area' => 'kothagudem', 'pincode' => '507101'],
                ['area' => 'palwancha', 'pincode' => '507115'],
                ['area' => 'bhadrachalam', 'pincode' => '507111'],
                ['area' => 'manuguru', 'pincode' => '507117']
            ],
            'mahabubabad' => [
                ['area' => 'mahabubabad', 'pincode' => '506101'],
                ['area' => 'dornakal', 'pincode' => '506381'],
                ['area' => 'thorrur', 'pincode' => '506104'],
                ['area' => 'narsimhulapet', 'pincode' => '506103']
            ],
            'jangaon' => [
                ['area' => 'jangaon', 'pincode' => '506167'],
                ['area' => 'ghanpur', 'pincode' => '506143'],
                ['area' => 'kodakandla', 'pincode' => '506172'],
                ['area' => 'chilpur', 'pincode' => '506366']
            ],
            'jayashankar' => [
                ['area' => 'mulugu', 'pincode' => '506343'],
                ['area' => 'eturunagaram', 'pincode' => '506165'],
                ['area' => 'govindaraopet', 'pincode' => '506144'],
                ['area' => 'venkatapur', 'pincode' => '506358']
            ],
            'komaram-bheem' => [
                ['area' => 'asifabad', 'pincode' => '504293'],
                ['area' => 'kagaznagar', 'pincode' => '504296'],
                ['area' => 'sirpur', 'pincode' => '504301'],
                ['area' => 'penchikalpet', 'pincode' => '504299']
            ]
        ],
        'tripura' => [
            'west-tripura' => [
                ['area' => 'agartala', 'pincode' => '799001'],
                ['area' => 'krishnanagar', 'pincode' => '799001'],
                ['area' => 'gb-pant', 'pincode' => '799001'],
                ['area' => 'college-tilla', 'pincode' => '799004']
            ],
            'south-tripura' => [
                ['area' => 'udaipur', 'pincode' => '799120'],
                ['area' => 'belonia', 'pincode' => '799155'],
                ['area' => 'santirbazar', 'pincode' => '799145'],
                ['area' => 'sabroom', 'pincode' => '799145']
            ],
            'north-tripura' => [
                ['area' => 'dharmanagar', 'pincode' => '799250'],
                ['area' => 'kailashahar', 'pincode' => '799277'],
                ['area' => 'panisagar', 'pincode' => '799260'],
                ['area' => 'kumarghat', 'pincode' => '799264']
            ],
            'dhalai' => [
                ['area' => 'ambassa', 'pincode' => '799289'],
                ['area' => 'kamalpur', 'pincode' => '799285'],
                ['area' => 'salema', 'pincode' => '799286'],
                ['area' => 'manu', 'pincode' => '799287']
            ],
            'gomati' => [
                ['area' => 'udaipur', 'pincode' => '799120'],
                ['area' => 'amarpur', 'pincode' => '799101'],
                ['area' => 'killa', 'pincode' => '799103'],
                ['area' => 'kakraban', 'pincode' => '799104']
            ],
            'khowai' => [
                ['area' => 'khowai', 'pincode' => '799201'],
                ['area' => 'teliamura', 'pincode' => '799205'],
                ['area' => 'kalyanpur', 'pincode' => '799211'],
                ['area' => 'mungiakami', 'pincode' => '799212']
            ],
            'sepahijala' => [
                ['area' => 'sonamura', 'pincode' => '799131'],
                ['area' => 'bishramganj', 'pincode' => '799102'],
                ['area' => 'boxanagar', 'pincode' => '799114'],
                ['area' => 'melaghar', 'pincode' => '799115']
            ],
            'unakoti' => [
                ['area' => 'kailashahar', 'pincode' => '799277'],
                ['area' => 'kumarghat', 'pincode' => '799264'],
                ['area' => 'gournagar', 'pincode' => '799263'],
                ['area' => 'pecharthal', 'pincode' => '799265']
            ]
        ],
        'uttar-pradesh' => [
            'lucknow' => [
                ['area' => 'lucknow', 'pincode' => '226001'],
                ['area' => 'hazratganj', 'pincode' => '226001'],
                ['area' => 'gomti-nagar', 'pincode' => '226010'],
                ['area' => 'indira-nagar', 'pincode' => '226016'],
                ['area' => 'aliganj', 'pincode' => '226024']
            ],
            'kanpur-nagar' => [
                ['area' => 'kanpur', 'pincode' => '208001'],
                ['area' => 'civil-lines', 'pincode' => '208001'],
                ['area' => 'mall-road', 'pincode' => '208001'],
                ['area' => 'swaroop-nagar', 'pincode' => '208002']
            ],
            'ghaziabad' => [
                ['area' => 'ghaziabad', 'pincode' => '201001'],
                ['area' => 'raj-nagar', 'pincode' => '201002'],
                ['area' => 'vaishali', 'pincode' => '201010'],
                ['area' => 'indirapuram', 'pincode' => '201014']
            ],
            'agra' => [
                ['area' => 'agra', 'pincode' => '282001'],
                ['area' => 'taj-mahal', 'pincode' => '282001'],
                ['area' => 'sadar-bazar', 'pincode' => '282002'],
                ['area' => 'dayalbagh', 'pincode' => '282005']
            ],
            'varanasi' => [
                ['area' => 'varanasi', 'pincode' => '221001'],
                ['area' => 'bhu', 'pincode' => '221005'],
                ['area' => 'cantonment', 'pincode' => '221002'],
                ['area' => 'godowlia', 'pincode' => '221001']
            ],
            'meerut' => [
                ['area' => 'meerut', 'pincode' => '250001'],
                ['area' => 'civil-lines', 'pincode' => '250001'],
                ['area' => 'shastri-nagar', 'pincode' => '250004'],
                ['area' => 'brahmpuri', 'pincode' => '250002']
            ],
            'allahabad' => [
                ['area' => 'prayagraj', 'pincode' => '211001'],
                ['area' => 'civil-lines', 'pincode' => '211001'],
                ['area' => 'katra', 'pincode' => '211002'],
                ['area' => 'george-town', 'pincode' => '211002']
            ],
            'gautam-buddha-nagar' => [
                ['area' => 'noida', 'pincode' => '201301'],
                ['area' => 'greater-noida', 'pincode' => '201306'],
                ['area' => 'sector-18', 'pincode' => '201301'],
                ['area' => 'sector-62', 'pincode' => '201309']
            ],
            'gorakhpur' => [
                ['area' => 'gorakhpur', 'pincode' => '273001'],
                ['area' => 'golghar', 'pincode' => '273001'],
                ['area' => 'betiahata', 'pincode' => '273004'],
                ['area' => 'rapti-nagar', 'pincode' => '273008']
            ],
            'aligarh' => [
                ['area' => 'aligarh', 'pincode' => '202001'],
                ['area' => 'civil-lines', 'pincode' => '202001'],
                ['area' => 'marris-road', 'pincode' => '202001'],
                ['area' => 'quarsi', 'pincode' => '202002']
            ],
            'bareilly' => [
                ['area' => 'bareilly', 'pincode' => '243001'],
                ['area' => 'civil-lines', 'pincode' => '243001'],
                ['area' => 'prem-nagar', 'pincode' => '243005'],
                ['area' => 'rampur-garden', 'pincode' => '243003']
            ],
            'moradabad' => [
                ['area' => 'moradabad', 'pincode' => '244001'],
                ['area' => 'civil-lines', 'pincode' => '244001'],
                ['area' => 'budh-bazar', 'pincode' => '244001'],
                ['area' => 'majhola', 'pincode' => '244001']
            ],
            'saharanpur' => [
                ['area' => 'saharanpur', 'pincode' => '247001'],
                ['area' => 'nehru-market', 'pincode' => '247001'],
                ['area' => 'chilkana-road', 'pincode' => '247001'],
                ['area' => 'badshahi-bagh', 'pincode' => '247001']
            ],
            'firozabad' => [
                ['area' => 'firozabad', 'pincode' => '283203'],
                ['area' => 'tundla', 'pincode' => '283204'],
                ['area' => 'shikohabad', 'pincode' => '283135'],
                ['area' => 'jasrana', 'pincode' => '283123']
            ],
            'jhansi' => [
                ['area' => 'jhansi', 'pincode' => '284001'],
                ['area' => 'civil-lines', 'pincode' => '284001'],
                ['area' => 'elite-crossing', 'pincode' => '284001'],
                ['area' => 'cantonment', 'pincode' => '284001']
            ],
            'muzaffarnagar' => [
                ['area' => 'muzaffarnagar', 'pincode' => '251001'],
                ['area' => 'shamli', 'pincode' => '247776'],
                ['area' => 'kairana', 'pincode' => '247774'],
                ['area' => 'budhana', 'pincode' => '251309']
            ],
            'mathura' => [
                ['area' => 'mathura', 'pincode' => '281001'],
                ['area' => 'vrindavan', 'pincode' => '281121'],
                ['area' => 'govardhan', 'pincode' => '281502'],
                ['area' => 'nandgaon', 'pincode' => '281403']
            ],
            'budaun' => [
                ['area' => 'budaun', 'pincode' => '243601'],
                ['area' => 'bisauli', 'pincode' => '243720'],
                ['area' => 'dataganj', 'pincode' => '243635'],
                ['area' => 'sahaswan', 'pincode' => '243766']
            ],
            'rampur' => [
                ['area' => 'rampur', 'pincode' => '244901'],
                ['area' => 'bilaspur', 'pincode' => '244921'],
                ['area' => 'milak', 'pincode' => '244924'],
                ['area' => 'tanda', 'pincode' => '244925']
            ],
            'shahjahanpur' => [
                ['area' => 'shahjahanpur', 'pincode' => '242001'],
                ['area' => 'tilhar', 'pincode' => '242042'],
                ['area' => 'powayan', 'pincode' => '242401'],
                ['area' => 'jalalabad', 'pincode' => '242226']
            ],
            'farrukhabad' => [
                ['area' => 'farrukhabad', 'pincode' => '209625'],
                ['area' => 'fatehgarh', 'pincode' => '209601'],
                ['area' => 'kaimganj', 'pincode' => '209502'],
                ['area' => 'mohammadabad', 'pincode' => '209505']
            ],
            'bulandshahr' => [
                ['area' => 'bulandshahr', 'pincode' => '203001'],
                ['area' => 'khurja', 'pincode' => '203131'],
                ['area' => 'sikandrabad', 'pincode' => '203205'],
                ['area' => 'anupshahr', 'pincode' => '203390']
            ],
            'hapur' => [
                ['area' => 'hapur', 'pincode' => '245101'],
                ['area' => 'garhmukteshwar', 'pincode' => '245205'],
                ['area' => 'pilkhuwa', 'pincode' => '245304'],
                ['area' => 'gulaothi', 'pincode' => '245408']
            ],
            'unnao' => [
                ['area' => 'unnao', 'pincode' => '209801'],
                ['area' => 'bighapur', 'pincode' => '209721'],
                ['area' => 'safipur', 'pincode' => '209863'],
                ['area' => 'purwa', 'pincode' => '209859']
            ],
            'sitapur' => [
                ['area' => 'sitapur', 'pincode' => '261001'],
                ['area' => 'biswan', 'pincode' => '261201'],
                ['area' => 'mahmudabad', 'pincode' => '262305'],
                ['area' => 'misrikh', 'pincode' => '261405']
            ],
            'hardoi' => [
                ['area' => 'hardoi', 'pincode' => '241001'],
                ['area' => 'shahabad', 'pincode' => '241124'],
                ['area' => 'sandila', 'pincode' => '241204'],
                ['area' => 'bilgram', 'pincode' => '241203']
            ],
            'lakhimpur-kheri' => [
                ['area' => 'lakhimpur', 'pincode' => '262701'],
                ['area' => 'kheri', 'pincode' => '262802'],
                ['area' => 'gola-gokarnath', 'pincode' => '262802'],
                ['area' => 'palia-kalan', 'pincode' => '262902']
            ],
            'rae-bareli' => [
                ['area' => 'rae-bareli', 'pincode' => '229001'],
                ['area' => 'lalganj', 'pincode' => '229206'],
                ['area' => 'salon', 'pincode' => '229407'],
                ['area' => 'dalmau', 'pincode' => '229302']
            ],
            'barabanki' => [
                ['area' => 'barabanki', 'pincode' => '225001'],
                ['area' => 'nawabganj', 'pincode' => '225305'],
                ['area' => 'ramsanehi-ghat', 'pincode' => '225302'],
                ['area' => 'fatehpur', 'pincode' => '225415']
            ],
            'faizabad' => [
                ['area' => 'ayodhya', 'pincode' => '224001'],
                ['area' => 'faizabad', 'pincode' => '224001'],
                ['area' => 'rudauli', 'pincode' => '224149'],
                ['area' => 'bikapur', 'pincode' => '224147']
            ],
            'ambedkar-nagar' => [
                ['area' => 'akbarpur', 'pincode' => '224122'],
                ['area' => 'tanda', 'pincode' => '224190'],
                ['area' => 'bhiyaon', 'pincode' => '224227'],
                ['area' => 'jalalpur', 'pincode' => '224202']
            ],
            'sultanpur' => [
                ['area' => 'sultanpur', 'pincode' => '228001'],
                ['area' => 'lambhua', 'pincode' => '227813'],
                ['area' => 'kadipur', 'pincode' => '227808'],
                ['area' => 'dostpur', 'pincode' => '228145']
            ],
            'bahraich' => [
                ['area' => 'bahraich', 'pincode' => '271801'],
                ['area' => 'nanpara', 'pincode' => '271865'],
                ['area' => 'kaiserganj', 'pincode' => '271903'],
                ['area' => 'mahsi', 'pincode' => '271802']
            ],
            'shravasti' => [
                ['area' => 'bhinga', 'pincode' => '271831'],
                ['area' => 'giला-shravasti', 'pincode' => '271845'],
                ['area' => 'ikauna', 'pincode' => '271835'],
                ['area' => 'jamunaha', 'pincode' => '271851']
            ],
            'balrampur' => [
                ['area' => 'balrampur', 'pincode' => '271201'],
                ['area' => 'tulsipur', 'pincode' => '271208'],
                ['area' => 'utraula', 'pincode' => '271604'],
                ['area' => 'gainsari', 'pincode' => '271205']
            ],
            'gonda' => [
                ['area' => 'gonda', 'pincode' => '271001'],
                ['area' => 'colonelganj', 'pincode' => '271502'],
                ['area' => 'nawabganj', 'pincode' => '271303'],
                ['area' => 'mankapur', 'pincode' => '271302']
            ],
            'basti' => [
                ['area' => 'basti', 'pincode' => '272001'],
                ['area' => 'harraiya', 'pincode' => '272141'],
                ['area' => 'rudhauli', 'pincode' => '272163'],
                ['area' => 'walterganj', 'pincode' => '272126']
            ],
            'sant-kabir-nagar' => [
                ['area' => 'khalilabad', 'pincode' => '272175'],
                ['area' => 'mehdawal', 'pincode' => '272270'],
                ['area' => 'baghauli', 'pincode' => '272148'],
                ['area' => 'semariyawan', 'pincode' => '272199']
            ],
            'siddharthnagar' => [
                ['area' => 'naugarh', 'pincode' => '272207'],
                ['area' => 'bansi', 'pincode' => '272153'],
                ['area' => 'shohratgarh', 'pincode' => '272205'],
                ['area' => 'itwa', 'pincode' => '272192']
            ],
            'maharajganj' => [
                ['area' => 'maharajganj', 'pincode' => '273303'],
                ['area' => 'naugarh', 'pincode' => '273164'],
                ['area' => 'nichlaul', 'pincode' => '273304'],
                ['area' => 'pharenda', 'pincode' => '273157']
            ],
            'kushinagar' => [
                ['area' => 'padrauna', 'pincode' => '274304'],
                ['area' => 'kasya', 'pincode' => '274407'],
                ['area' => 'tamkuhi-raj', 'pincode' => '274805'],
                ['area' => 'hata', 'pincode' => '274802']
            ],
            'deoria' => [
                ['area' => 'deoria', 'pincode' => '274001'],
                ['area' => 'bhatpar-rani', 'pincode' => '274701'],
                ['area' => 'salempur', 'pincode' => '274506'],
                ['area' => 'barhaj', 'pincode' => '274601']
            ],
            'azamgarh' => [
                ['area' => 'azamgarh', 'pincode' => '276001'],
                ['area' => 'mau', 'pincode' => '275101'],
                ['area' => 'lalganj', 'pincode' => '276208'],
                ['area' => 'mubarakpur', 'pincode' => '276403']
            ],
            'mau' => [
                ['area' => 'mau', 'pincode' => '275101'],
                ['area' => 'madhuban', 'pincode' => '275102'],
                ['area' => 'muhammadabad', 'pincode' => '275202'],
                ['area' => 'ghosi', 'pincode' => '275302']
            ],
            'ballia' => [
                ['area' => 'ballia', 'pincode' => '277001'],
                ['area' => 'rasra', 'pincode' => '277304'],
                ['area' => 'bairiya', 'pincode' => '277001'],
                ['area' => 'sikanderpur', 'pincode' => '277203']
            ],
            'jaunpur' => [
                ['area' => 'jaunpur', 'pincode' => '222001'],
                ['area' => 'machhlishahr', 'pincode' => '222001'],
                ['area' => 'kerakat', 'pincode' => '222111'],
                ['area' => 'badlapur', 'pincode' => '222301']
            ],
            'ghazipur' => [
                ['area' => 'ghazipur', 'pincode' => '233001'],
                ['area' => 'mohammadabad', 'pincode' => '233304'],
                ['area' => 'saidpur', 'pincode' => '275204'],
                ['area' => 'zamania', 'pincode' => '232331']
            ],
            'chandauli' => [
                ['area' => 'chandauli', 'pincode' => '232101'],
                ['area' => 'mughal-sarai', 'pincode' => '232101'],
                ['area' => 'sakaldiha', 'pincode' => '232120'],
                ['area' => 'chakia', 'pincode' => '232120']
            ],
            'sant-ravidas-nagar' => [
                ['area' => 'bhadohi', 'pincode' => '221401'],
                ['area' => 'gyanpur', 'pincode' => '221304'],
                ['area' => 'aurai', 'pincode' => '221301'],
                ['area' => 'suriyawan', 'pincode' => '221311']
            ],
            'mirzapur' => [
                ['area' => 'mirzapur', 'pincode' => '231001'],
                ['area' => 'chunar', 'pincode' => '231304'],
                ['area' => 'lalganj', 'pincode' => '231211'],
                ['area' => 'vindhyachal', 'pincode' => '231307']
            ],
            'sonbhadra' => [
                ['area' => 'robertsganj', 'pincode' => '231216'],
                ['area' => 'obra', 'pincode' => '231219'],
                ['area' => 'chopan', 'pincode' => '231205'],
                ['area' => 'anpara', 'pincode' => '231225']
            ],
            'banda' => [
                ['area' => 'banda', 'pincode' => '210001'],
                ['area' => 'atarra', 'pincode' => '210201'],
                ['area' => 'naraini', 'pincode' => '210505'],
                ['area' => 'baberu', 'pincode' => '210502']
            ],
            'chitrakoot' => [
                ['area' => 'karvi', 'pincode' => '210205'],
                ['area' => 'mau', 'pincode' => '210208'],
                ['area' => 'rajapur', 'pincode' => '210431'],
                ['area' => 'chitrakoot-dham', 'pincode' => '210204']
            ],
            'mahoba' => [
                ['area' => 'mahoba', 'pincode' => '210427'],
                ['area' => 'kulpahar', 'pincode' => '210203'],
                ['area' => 'charkhari', 'pincode' => '210421'],
                ['area' => 'panwari', 'pincode' => '210507']
            ],
            'hamirpur' => [
                ['area' => 'hamirpur', 'pincode' => '210301'],
                ['area' => 'maudaha', 'pincode' => '210507'],
                ['area' => 'rath', 'pincode' => '210431'],
                ['area' => 'kurara', 'pincode' => '210421']
            ],
            'lalitpur' => [
                ['area' => 'lalitpur', 'pincode' => '284403'],
                ['area' => 'mahroni', 'pincode' => '284401'],
                ['area' => 'talbehat', 'pincode' => '284129'],
                ['area' => 'bar', 'pincode' => '284421']
            ],
            'etawah' => [
                ['area' => 'etawah', 'pincode' => '206001'],
                ['area' => 'chakarnagar', 'pincode' => '206128'],
                ['area' => 'bharthana', 'pincode' => '206244'],
                ['area' => 'jaswantnagar', 'pincode' => '206303']
            ],
            'mainpuri' => [
                ['area' => 'mainpuri', 'pincode' => '205001'],
                ['area' => 'bewar', 'pincode' => '205264'],
                ['area' => 'karhal', 'pincode' => '205263'],
                ['area' => 'bhongaon', 'pincode' => '205262']
            ],
            'etah' => [
                ['area' => 'etah', 'pincode' => '207001'],
                ['area' => 'kasganj', 'pincode' => '207123'],
                ['area' => 'aliganj', 'pincode' => '207242'],
                ['area' => 'jalesar', 'pincode' => '207302']
            ],
            'kasganj' => [
                ['area' => 'kasganj', 'pincode' => '207123'],
                ['area' => 'sahawar', 'pincode' => '207129'],
                ['area' => 'sidhpura', 'pincode' => '207241'],
                ['area' => 'patiyali', 'pincode' => '207120']
            ],
            'hathras' => [
                ['area' => 'hathras', 'pincode' => '204101'],
                ['area' => 'sadabad', 'pincode' => '283135'],
                ['area' => 'sikandra-rao', 'pincode' => '204215'],
                ['area' => 'sasni', 'pincode' => '204216']
            ],
            'kanpur-dehat' => [
                ['area' => 'akbarpur', 'pincode' => '208021'],
                ['area' => 'bhognipur', 'pincode' => '209121'],
                ['area' => 'rasulabad', 'pincode' => '209125'],
                ['area' => 'derapur', 'pincode' => '209502']
            ],
            'auraiya' => [
                ['area' => 'auraiya', 'pincode' => '206122'],
                ['area' => 'dibiyapur', 'pincode' => '206244'],
                ['area' => 'bidhuna', 'pincode' => '206241'],
                ['area' => 'achhalda', 'pincode' => '206129']
            ],
            'fatehpur' => [
                ['area' => 'fatehpur', 'pincode' => '212601'],
                ['area' => 'bindki', 'pincode' => '212635'],
                ['area' => 'khaga', 'pincode' => '212653'],
                ['area' => 'kishanpur', 'pincode' => '212641']
            ],
            'pratapgarh' => [
                ['area' => 'pratapgarh', 'pincode' => '230001'],
                ['area' => 'kunda', 'pincode' => '230204'],
                ['area' => 'lalganj', 'pincode' => '230131'],
                ['area' => 'patti', 'pincode' => '230135']
            ],
            'kaushambi' => [
                ['area' => 'manjhanpur', 'pincode' => '212207'],
                ['area' => 'sirathu', 'pincode' => '212301'],
                ['area' => 'chail', 'pincode' => '212106'],
                ['area' => 'sarai-aquil', 'pincode' => '212216']
            ],
            'kannauj' => [
                ['area' => 'kannauj', 'pincode' => '209725'],
                ['area' => 'chhibramau', 'pincode' => '209721'],
                ['area' => 'tirwa', 'pincode' => '209728'],
                ['area' => 'gursahaiganj', 'pincode' => '209745']
            ],
            'pilibhit' => [
                ['area' => 'pilibhit', 'pincode' => '262001'],
                ['area' => 'puranpur', 'pincode' => '262122'],
                ['area' => 'bisalpur', 'pincode' => '262201'],
                ['area' => 'barkhera', 'pincode' => '262401']
            ],
            'bijnor' => [
                ['area' => 'bijnor', 'pincode' => '246701'],
                ['area' => 'nagina', 'pincode' => '246762'],
                ['area' => 'najibabad', 'pincode' => '246763'],
                ['area' => 'chandpur', 'pincode' => '246725']
            ],
            'amroha' => [
                ['area' => 'amroha', 'pincode' => '244221'],
                ['area' => 'hasanpur', 'pincode' => '244242'],
                ['area' => 'dhanaura', 'pincode' => '244231'],
                ['area' => 'naugawan-sadat', 'pincode' => '244236']
            ],
            'sambhal' => [
                ['area' => 'sambhal', 'pincode' => '244302'],
                ['area' => 'chandausi', 'pincode' => '244412'],
                ['area' => 'gunnaur', 'pincode' => '244408'],
                ['area' => 'bahjoi', 'pincode' => '244410']
            ],
            'bagpat' => [
                ['area' => 'bagpat', 'pincode' => '250609'],
                ['area' => 'baraut', 'pincode' => '250611'],
                ['area' => 'khekra', 'pincode' => '250623'],
                ['area' => 'pilana', 'pincode' => '250625']
            ],
            'shamli' => [
                ['area' => 'shamli', 'pincode' => '247776'],
                ['area' => 'kairana', 'pincode' => '247774'],
                ['area' => 'kandhla', 'pincode' => '247775'],
                ['area' => 'thanabhavan', 'pincode' => '247773']
            ]
        ],
        'uttarakhand' => [
            'dehradun' => [
                ['area' => 'dehradun', 'pincode' => '248001'],
                ['area' => 'rajpur', 'pincode' => '248009'],
                ['area' => 'sahastradhara', 'pincode' => '248013'],
                ['area' => 'clement-town', 'pincode' => '248002']
            ],
            'haridwar' => [
                ['area' => 'haridwar', 'pincode' => '249401'],
                ['area' => 'rishikesh', 'pincode' => '249201'],
                ['area' => 'jwalapur', 'pincode' => '249407'],
                ['area' => 'roorkee', 'pincode' => '247667']
            ],
            'nainital' => [
                ['area' => 'nainital', 'pincode' => '263002'],
                ['area' => 'haldwani', 'pincode' => '263139'],
                ['area' => 'rudrapur', 'pincode' => '263153'],
                ['area' => 'ramnagar', 'pincode' => '244715']
            ],
            'almora' => [
                ['area' => 'almora', 'pincode' => '263601'],
                ['area' => 'ranikhet', 'pincode' => '263645'],
                ['area' => 'dwarahat', 'pincode' => '263653'],
                ['area' => 'someshwar', 'pincode' => '263631']
            ],
            'pauri-garhwal' => [
                ['area' => 'pauri', 'pincode' => '246001'],
                ['area' => 'srinagar', 'pincode' => '246174'],
                ['area' => 'kotdwar', 'pincode' => '246149'],
                ['area' => 'lansdowne', 'pincode' => '246155']
            ],
            'tehri-garhwal' => [
                ['area' => 'tehri', 'pincode' => '249001'],
                ['area' => 'new-tehri', 'pincode' => '249001'],
                ['area' => 'pratapnagar', 'pincode' => '249145'],
                ['area' => 'dhanaulti', 'pincode' => '249145']
            ],
            'rudraprayag' => [
                ['area' => 'rudraprayag', 'pincode' => '246171'],
                ['area' => 'ukhimath', 'pincode' => '246469'],
                ['area' => 'jakholi', 'pincode' => '246448'],
                ['area' => 'augustmuni', 'pincode' => '246421']
            ],
            'chamoli' => [
                ['area' => 'gopeshwar', 'pincode' => '246424'],
                ['area' => 'joshimath', 'pincode' => '246443'],
                ['area' => 'karnaprayag', 'pincode' => '246415'],
                ['area' => 'gairsain', 'pincode' => '246428']
            ],
            'uttarkashi' => [
                ['area' => 'uttarkashi', 'pincode' => '249193'],
                ['area' => 'gangotri', 'pincode' => '249135'],
                ['area' => 'barkot', 'pincode' => '249141'],
                ['area' => 'purola', 'pincode' => '249185']
            ],
            'pithoragarh' => [
                ['area' => 'pithoragarh', 'pincode' => '262501'],
                ['area' => 'dharchula', 'pincode' => '262545'],
                ['area' => 'didihat', 'pincode' => '262551'],
                ['area' => 'berinag', 'pincode' => '262531']
            ],
            'champawat' => [
                ['area' => 'champawat', 'pincode' => '262523'],
                ['area' => 'tanakpur', 'pincode' => '262309'],
                ['area' => 'lohaghat', 'pincode' => '262524'],
                ['area' => 'pati', 'pincode' => '262522']
            ],
            'bageshwar' => [
                ['area' => 'bageshwar', 'pincode' => '263642'],
                ['area' => 'kapkot', 'pincode' => '263643'],
                ['area' => 'garur', 'pincode' => '263656'],
                ['area' => 'kanda', 'pincode' => '263646']
            ],
            'udham-singh-nagar' => [
                ['area' => 'rudrapur', 'pincode' => '263153'],
                ['area' => 'kashipur', 'pincode' => '244713'],
                ['area' => 'kichha', 'pincode' => '263148'],
                ['area' => 'sitarganj', 'pincode' => '262405']
            ]
        ],
        'west-bengal' => [
            'kolkata' => [
                ['area' => 'kolkata', 'pincode' => '700001'],
                ['area' => 'park-street', 'pincode' => '700016'],
                ['area' => 'salt-lake', 'pincode' => '700064'],
                ['area' => 'new-town', 'pincode' => '700156'],
                ['area' => 'esplanade', 'pincode' => '700069']
            ],
            'north-24-parganas' => [
                ['area' => 'barrackpore', 'pincode' => '700120'],
                ['area' => 'dum-dum', 'pincode' => '700074'],
                ['area' => 'bongaon', 'pincode' => '743235'],
                ['area' => 'basirhat', 'pincode' => '743411']
            ],
            'south-24-parganas' => [
                ['area' => 'diamond-harbour', 'pincode' => '743331'],
                ['area' => 'baruipur', 'pincode' => '700144'],
                ['area' => 'canning', 'pincode' => '743329'],
                ['area' => 'kakdwip', 'pincode' => '743347']
            ],
            'hooghly' => [
                ['area' => 'hooghly', 'pincode' => '712101'],
                ['area' => 'chinsurah', 'pincode' => '712101'],
                ['area' => 'serampore', 'pincode' => '712201'],
                ['area' => 'chandannagar', 'pincode' => '712136']
            ],
            'howrah' => [
                ['area' => 'howrah', 'pincode' => '711101'],
                ['area' => 'shibpur', 'pincode' => '711102'],
                ['area' => 'liluah', 'pincode' => '711204'],
                ['area' => 'uluberia', 'pincode' => '711315']
            ],
            'darjeeling' => [
                ['area' => 'darjeeling', 'pincode' => '734101'],
                ['area' => 'kurseong', 'pincode' => '734203'],
                ['area' => 'kalimpong', 'pincode' => '734301'],
                ['area' => 'siliguri', 'pincode' => '734001']
            ],
            'alipurduar' => [
                ['area' => 'alipurduar', 'pincode' => '736121'],
                ['area' => 'jaigaon', 'pincode' => '736182'],
                ['area' => 'birpara', 'pincode' => '735204'],
                ['area' => 'falakata', 'pincode' => '735211']
            ],
            'jalpaiguri' => [
                ['area' => 'jalpaiguri', 'pincode' => '735101'],
                ['area' => 'mal', 'pincode' => '735221'],
                ['area' => 'nagrakata', 'pincode' => '735225'],
                ['area' => 'maynaguri', 'pincode' => '735224']
            ],
            'cooch-behar' => [
                ['area' => 'cooch-behar', 'pincode' => '736101'],
                ['area' => 'dinhata', 'pincode' => '736135'],
                ['area' => 'mathabhanga', 'pincode' => '736146'],
                ['area' => 'tufanganj', 'pincode' => '736159']
            ],
            'uttar-dinajpur' => [
                ['area' => 'raiganj', 'pincode' => '733134'],
                ['area' => 'islampur', 'pincode' => '733202'],
                ['area' => 'kaliyaganj', 'pincode' => '733129'],
                ['area' => 'karandighi', 'pincode' => '733121']
            ],
            'dakshin-dinajpur' => [
                ['area' => 'balurghat', 'pincode' => '733101'],
                ['area' => 'gangarampur', 'pincode' => '733124'],
                ['area' => 'buniadpur', 'pincode' => '733121'],
                ['area' => 'harirampur', 'pincode' => '733132']
            ],
            'malda' => [
                ['area' => 'english-bazar', 'pincode' => '732101'],
                ['area' => 'old-malda', 'pincode' => '732142'],
                ['area' => 'kaliachak', 'pincode' => '732201'],
                ['area' => 'chanchal', 'pincode' => '732123']
            ],
            'murshidabad' => [
                ['area' => 'baharampur', 'pincode' => '742101'],
                ['area' => 'berhampore', 'pincode' => '742101'],
                ['area' => 'kandi', 'pincode' => '742137'],
                ['area' => 'jangipur', 'pincode' => '742213']
            ],
            'nadia' => [
                ['area' => 'krishnanagar', 'pincode' => '741101'],
                ['area' => 'ranaghat', 'pincode' => '741201'],
                ['area' => 'kalyani', 'pincode' => '741235'],
                ['area' => 'chakdaha', 'pincode' => '741222']
            ],
            'purba-bardhaman' => [
                ['area' => 'bardhaman', 'pincode' => '713101'],
                ['area' => 'katwa', 'pincode' => '713130'],
                ['area' => 'kalna', 'pincode' => '713409'],
                ['area' => 'memari', 'pincode' => '713146']
            ],
            'paschim-bardhaman' => [
                ['area' => 'asansol', 'pincode' => '713301'],
                ['area' => 'durgapur', 'pincode' => '713201'],
                ['area' => 'raniganj', 'pincode' => '713347'],
                ['area' => 'kulti', 'pincode' => '713343']
            ],
            'birbhum' => [
                ['area' => 'suri', 'pincode' => '731101'],
                ['area' => 'bolpur', 'pincode' => '731204'],
                ['area' => 'rampurhat', 'pincode' => '731224'],
                ['area' => 'sainthia', 'pincode' => '731234']
            ],
            'purba-medinipur' => [
                ['area' => 'tamluk', 'pincode' => '721636'],
                ['area' => 'contai', 'pincode' => '721401'],
                ['area' => 'haldia', 'pincode' => '721602'],
                ['area' => 'egra', 'pincode' => '721429']
            ],
            'paschim-medinipur' => [
                ['area' => 'midnapore', 'pincode' => '721101'],
                ['area' => 'kharagpur', 'pincode' => '721301'],
                ['area' => 'jhargram', 'pincode' => '721507'],
                ['area' => 'ghatal', 'pincode' => '721212']
            ],
            'jhargram' => [
                ['area' => 'jhargram', 'pincode' => '721507'],
                ['area' => 'jamboni', 'pincode' => '721515'],
                ['area' => 'nayagram', 'pincode' => '721516'],
                ['area' => 'binpur', 'pincode' => '721504']
            ],
            'bankura' => [
                ['area' => 'bankura', 'pincode' => '722101'],
                ['area' => 'bishnupur', 'pincode' => '722122'],
                ['area' => 'khatra', 'pincode' => '722140'],
                ['area' => 'sonamukhi', 'pincode' => '722207']
            ],
            'purulia' => [
                ['area' => 'purulia', 'pincode' => '723101'],
                ['area' => 'jhalda', 'pincode' => '723202'],
                ['area' => 'raghunathpur', 'pincode' => '723133'],
                ['area' => 'barabazar', 'pincode' => '723127']
            ],
            'kalimpong' => [
                ['area' => 'kalimpong', 'pincode' => '734301'],
                ['area' => 'lava', 'pincode' => '734312'],
                ['area' => 'gorubathan', 'pincode' => '734321'],
                ['area' => 'algarah', 'pincode' => '734311']
            ]
        ],
        // Union Territories
        'delhi' => [
            'central-delhi' => [
                ['area' => 'connaught-place', 'pincode' => '110001'],
                ['area' => 'karol-bagh', 'pincode' => '110005'],
                ['area' => 'paharganj', 'pincode' => '110055'],
                ['area' => 'chandni-chowk', 'pincode' => '110006']
            ],
            'new-delhi' => [
                ['area' => 'new-delhi', 'pincode' => '110001'],
                ['area' => 'india-gate', 'pincode' => '110003'],
                ['area' => 'rajpath', 'pincode' => '110001'],
                ['area' => 'lutyens-delhi', 'pincode' => '110011']
            ],
            'south-delhi' => [
                ['area' => 'lajpat-nagar', 'pincode' => '110024'],
                ['area' => 'greater-kailash', 'pincode' => '110048'],
                ['area' => 'hauz-khas', 'pincode' => '110016'],
                ['area' => 'vasant-kunj', 'pincode' => '110070']
            ],
            'north-delhi' => [
                ['area' => 'civil-lines', 'pincode' => '110054'],
                ['area' => 'model-town', 'pincode' => '110009'],
                ['area' => 'kamla-nagar', 'pincode' => '110007'],
                ['area' => 'gtb-nagar', 'pincode' => '110009']
            ],
            'east-delhi' => [
                ['area' => 'laxmi-nagar', 'pincode' => '110092'],
                ['area' => 'preet-vihar', 'pincode' => '110092'],
                ['area' => 'mayur-vihar', 'pincode' => '110091'],
                ['area' => 'patparganj', 'pincode' => '110092']
            ],
            'west-delhi' => [
                ['area' => 'rajouri-garden', 'pincode' => '110027'],
                ['area' => 'janakpuri', 'pincode' => '110058'],
                ['area' => 'tilak-nagar', 'pincode' => '110018'],
                ['area' => 'vikaspuri', 'pincode' => '110018']
            ],
            'north-east-delhi' => [
                ['area' => 'seelampur', 'pincode' => '110053'],
                ['area' => 'shahdara', 'pincode' => '110032'],
                ['area' => 'welcome', 'pincode' => '110094'],
                ['area' => 'karawal-nagar', 'pincode' => '110094']
            ],
            'north-west-delhi' => [
                ['area' => 'rohini', 'pincode' => '110085'],
                ['area' => 'pitampura', 'pincode' => '110034'],
                ['area' => 'shalimar-bagh', 'pincode' => '110088'],
                ['area' => 'kanjhawala', 'pincode' => '110081']
            ],
            'south-west-delhi' => [
                ['area' => 'dwarka', 'pincode' => '110075'],
                ['area' => 'uttam-nagar', 'pincode' => '110059'],
                ['area' => 'najafgarh', 'pincode' => '110043'],
                ['area' => 'kapashera', 'pincode' => '110037']
            ],
            'south-east-delhi' => [
                ['area' => 'defense-colony', 'pincode' => '110024'],
                ['area' => 'kalkaji', 'pincode' => '110019'],
                ['area' => 'okhla', 'pincode' => '110025'],
                ['area' => 'sarita-vihar', 'pincode' => '110076']
            ],
            'shahdara' => [
                ['area' => 'shahdara', 'pincode' => '110032'],
                ['area' => 'vivek-vihar', 'pincode' => '110095'],
                ['area' => 'dilshad-garden', 'pincode' => '110095'],
                ['area' => 'karkardooma', 'pincode' => '110032']
            ]
        ],
        'chandigarh' => [
            'chandigarh' => [
                ['area' => 'sector-17', 'pincode' => '160017'],
                ['area' => 'sector-22', 'pincode' => '160022'],
                ['area' => 'sector-35', 'pincode' => '160035'],
                ['area' => 'panchkula', 'pincode' => '134109'],
                ['area' => 'mohali', 'pincode' => '160055']
            ]
        ],
        'puducherry' => [
            'puducherry' => [
                ['area' => 'puducherry', 'pincode' => '605001'],
                ['area' => 'white-town', 'pincode' => '605001'],
                ['area' => 'french-quarter', 'pincode' => '605001'],
                ['area' => 'auroville', 'pincode' => '605101'],
                ['area' => 'karaikal', 'pincode' => '609602']
            ]
        ],
        'jammu-kashmir' => [
            'srinagar' => [
                ['area' => 'srinagar', 'pincode' => '190001'],
                ['area' => 'dal-lake', 'pincode' => '190006'],
                ['area' => 'lal-chowk', 'pincode' => '190001'],
                ['area' => 'gulmarg', 'pincode' => '193403'],
                ['area' => 'sonamarg', 'pincode' => '191201'],
                ['area' => 'pahalgam', 'pincode' => '192126']
            ],
            'jammu' => [
                ['area' => 'jammu', 'pincode' => '180001'],
                ['area' => 'jammu-cantt', 'pincode' => '180005'],
                ['area' => 'gandhi-nagar', 'pincode' => '180004'],
                ['area' => 'talab-tillo', 'pincode' => '180002'],
                ['area' => 'katra', 'pincode' => '182301']
            ],
            'anantnag' => [
                ['area' => 'anantnag', 'pincode' => '192101'],
                ['area' => 'islamabad', 'pincode' => '192121'],
                ['area' => 'kokernag', 'pincode' => '192203'],
                ['area' => 'verinag', 'pincode' => '192204']
            ],
            'baramulla' => [
                ['area' => 'baramulla', 'pincode' => '193101'],
                ['area' => 'sopore', 'pincode' => '193201'],
                ['area' => 'uri', 'pincode' => '193123'],
                ['area' => 'tangmarg', 'pincode' => '193402']
            ],
            'kupwara' => [
                ['area' => 'kupwara', 'pincode' => '193222'],
                ['area' => 'handwara', 'pincode' => '193221'],
                ['area' => 'langate', 'pincode' => '193223'],
                ['area' => 'kralpora', 'pincode' => '193224']
            ],
            'budgam' => [
                ['area' => 'budgam', 'pincode' => '191111'],
                ['area' => 'chadoora', 'pincode' => '191113'],
                ['area' => 'khag', 'pincode' => '191201'],
                ['area' => 'beerwah', 'pincode' => '193411']
            ],
            'pulwama' => [
                ['area' => 'pulwama', 'pincode' => '192301'],
                ['area' => 'shopian', 'pincode' => '192303'],
                ['area' => 'pampore', 'pincode' => '192121'],
                ['area' => 'tral', 'pincode' => '192123']
            ],
            'ganderbal' => [
                ['area' => 'ganderbal', 'pincode' => '191201'],
                ['area' => 'kangan', 'pincode' => '191202'],
                ['area' => 'gund', 'pincode' => '191203'],
                ['area' => 'lar', 'pincode' => '191204']
            ],
            'bandipore' => [
                ['area' => 'bandipore', 'pincode' => '193502'],
                ['area' => 'sumbal', 'pincode' => '193501'],
                ['area' => 'gurez', 'pincode' => '193504'],
                ['area' => 'hajin', 'pincode' => '193101']
            ],
            'kulgam' => [
                ['area' => 'kulgam', 'pincode' => '192231'],
                ['area' => 'yaripora', 'pincode' => '192221'],
                ['area' => 'devsar', 'pincode' => '192232'],
                ['area' => 'damhal-hanjipora', 'pincode' => '192233']
            ],
            'shopian' => [
                ['area' => 'shopian', 'pincode' => '192303'],
                ['area' => 'zainpora', 'pincode' => '192304'],
                ['area' => 'keegam', 'pincode' => '192305'],
                ['area' => 'hermain', 'pincode' => '192306']
            ],
            'rajouri' => [
                ['area' => 'rajouri', 'pincode' => '185131'],
                ['area' => 'nowshera', 'pincode' => '185152'],
                ['area' => 'thanamandi', 'pincode' => '185153'],
                ['area' => 'sunderbani', 'pincode' => '185154']
            ],
            'poonch' => [
                ['area' => 'poonch', 'pincode' => '185101'],
                ['area' => 'mendhar', 'pincode' => '185211'],
                ['area' => 'surankote', 'pincode' => '185121'],
                ['area' => 'mandi', 'pincode' => '185151']
            ],
            'doda' => [
                ['area' => 'doda', 'pincode' => '182202'],
                ['area' => 'bhaderwah', 'pincode' => '182222'],
                ['area' => 'kishtwar', 'pincode' => '182204'],
                ['area' => 'gandoh', 'pincode' => '182206']
            ],
            'udhampur' => [
                ['area' => 'udhampur', 'pincode' => '182101'],
                ['area' => 'chenani', 'pincode' => '182122'],
                ['area' => 'ramnagar', 'pincode' => '182144'],
                ['area' => 'majalta', 'pincode' => '182127']
            ],
            'kathua' => [
                ['area' => 'kathua', 'pincode' => '184101'],
                ['area' => 'hiranagar', 'pincode' => '184143'],
                ['area' => 'billawar', 'pincode' => '184204'],
                ['area' => 'basohli', 'pincode' => '184201']
            ],
            'reasi' => [
                ['area' => 'reasi', 'pincode' => '182311'],
                ['area' => 'katra', 'pincode' => '182301'],
                ['area' => 'bhomag', 'pincode' => '182312'],
                ['area' => 'arnas', 'pincode' => '182313']
            ],
            'ramban' => [
                ['area' => 'ramban', 'pincode' => '182144'],
                ['area' => 'banihal', 'pincode' => '182146'],
                ['area' => 'gool', 'pincode' => '182147'],
                ['area' => 'batote', 'pincode' => '182145']
            ],
            'kishtwar' => [
                ['area' => 'kishtwar', 'pincode' => '182204'],
                ['area' => 'padder', 'pincode' => '182205'],
                ['area' => 'marwah', 'pincode' => '182206'],
                ['area' => 'chatroo', 'pincode' => '182207']
            ],
            'samba' => [
                ['area' => 'samba', 'pincode' => '184121'],
                ['area' => 'vijaypur', 'pincode' => '184120'],
                ['area' => 'ghagwal', 'pincode' => '181131'],
                ['area' => 'ramgarh', 'pincode' => '184122']
            ]
        ],
        'ladakh' => [
            'leh' => [
                ['area' => 'leh', 'pincode' => '194101'],
                ['area' => 'shey', 'pincode' => '194101'],
                ['area' => 'thiksey', 'pincode' => '194201'],
                ['area' => 'nubra-valley', 'pincode' => '194401']
            ],
            'kargil' => [
                ['area' => 'kargil', 'pincode' => '194103'],
                ['area' => 'drass', 'pincode' => '194102'],
                ['area' => 'zanskar', 'pincode' => '194401'],
                ['area' => 'sankoo', 'pincode' => '194104']
            ]
        ],
        'andaman-nicobar-islands' => [
            'south-andaman' => [
                ['area' => 'port-blair', 'pincode' => '744101'],
                ['area' => 'haddo', 'pincode' => '744102'],
                ['area' => 'wandoor', 'pincode' => '744103'],
                ['area' => 'chidiyatapu', 'pincode' => '744105']
            ],
            'north-andaman' => [
                ['area' => 'diglipur', 'pincode' => '744202'],
                ['area' => 'mayabunder', 'pincode' => '744204'],
                ['area' => 'rangat', 'pincode' => '744205'],
                ['area' => 'baratang', 'pincode' => '744204']
            ],
            'nicobar' => [
                ['area' => 'car-nicobar', 'pincode' => '744301'],
                ['area' => 'nancowry', 'pincode' => '744302'],
                ['area' => 'great-nicobar', 'pincode' => '744303'],
                ['area' => 'little-andaman', 'pincode' => '744207']
            ]
        ],
        'lakshadweep' => [
            'lakshadweep' => [
                ['area' => 'kavaratti', 'pincode' => '682555'],
                ['area' => 'agatti', 'pincode' => '682553'],
                ['area' => 'minicoy', 'pincode' => '682559'],
                ['area' => 'kalpeni', 'pincode' => '682556'],
                ['area' => 'andrott', 'pincode' => '682551'],
                ['area' => 'amini', 'pincode' => '682552'],
                ['area' => 'kadmat', 'pincode' => '682554'],
                ['area' => 'kiltan', 'pincode' => '682557']
            ]
        ],
        'dadra-nagar-haveli-daman-diu' => [
            'daman' => [
                ['area' => 'daman', 'pincode' => '396210'],
                ['area' => 'moti-daman', 'pincode' => '396220'],
                ['area' => 'nani-daman', 'pincode' => '396210'],
                ['area' => 'jampore', 'pincode' => '396210']
            ],
            'diu' => [
                ['area' => 'diu', 'pincode' => '362520'],
                ['area' => 'nagoa', 'pincode' => '362520'],
                ['area' => 'vanakbara', 'pincode' => '362520'],
                ['area' => 'fudam', 'pincode' => '362520']
            ],
            'dadra-nagar-haveli' => [
                ['area' => 'silvassa', 'pincode' => '396230'],
                ['area' => 'vapi', 'pincode' => '396191'],
                ['area' => 'dadra', 'pincode' => '396230'],
                ['area' => 'khanvel', 'pincode' => '396230']
            ]
        ]
    ];
    
    public function generateDistrictPage($stateSlug, $districtSlug) {
        $stateName = ucwords(str_replace('-', ' ', $stateSlug));
        $districtName = ucwords(str_replace('-', ' ', $districtSlug));
        
        $title = "Pincode Directory for {$districtName} District, {$stateName}";
        $description = "Complete list of pincodes for {$districtName} district in {$stateName}. Find postal codes for all areas, towns, and villages in {$districtName} district.";
        
        // Get sample pincodes for this district
        $pincodes = [];
        if (isset($this->samplePincodes[$stateSlug][$districtSlug])) {
            $pincodes = $this->samplePincodes[$stateSlug][$districtSlug];
        }
        
        ob_start();
        ?>
    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($districtName); ?> pincode, <?php echo htmlspecialchars($stateName); ?> <?php echo htmlspecialchars($districtName); ?> postal code, <?php echo $districtSlug; ?> district pincode">
    <meta name="author" content="Thiyagi">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/pincode/<?php echo $stateSlug; ?>/<?php echo $districtSlug; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/pincode/<?php echo $stateSlug; ?>/<?php echo $districtSlug; ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">

    <!-- CSS Framework -->
<body class="bg-gray-50">
    <?php include_once '../header.php'; ?>
    
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li><a href="/pincode" class="hover:text-blue-600">Pincode</a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li><a href="/pincode/<?php echo $stateSlug; ?>" class="hover:text-blue-600"><?php echo htmlspecialchars($stateName); ?></a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li class="text-gray-900"><?php echo htmlspecialchars($districtName); ?></li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2"><?php echo htmlspecialchars($title); ?></h1>
            <p class="text-gray-600 text-lg"><?php echo htmlspecialchars($description); ?></p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="md:col-span-2">
                <!-- Pincodes Grid -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">
                        <i class="fas fa-list text-blue-600 mr-2"></i>
                        Areas and Pincodes in <?php echo htmlspecialchars($districtName); ?>
                    </h2>
                    
                    <?php if (!empty($pincodes)): ?>
                    <div class="grid gap-4">
                        <?php foreach ($pincodes as $item): ?>
                            <a href="/pincode/<?php echo $stateSlug; ?>/<?php echo $districtSlug; ?>/<?php echo $item['area']; ?>-pincode-<?php echo $item['pincode']; ?>" 
                               class="block bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-4 transition-colors group">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="font-semibold text-blue-900 capitalize text-lg">
                                            <?php echo str_replace('-', ' ', $item['area']); ?>
                                        </div>
                                        <div class="text-gray-600 text-sm">
                                            <?php echo htmlspecialchars($districtName); ?> District, <?php echo htmlspecialchars($stateName); ?>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-mono text-xl font-bold text-blue-900">
                                            <?php echo $item['pincode']; ?>
                                        </div>
                                        <div class="text-blue-600 text-sm group-hover:text-blue-800">
                                            View Details <i class="fas fa-chevron-right ml-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                    <div class="text-center py-12">
                        <i class="fas fa-search text-gray-400 text-4xl mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">No Pincodes Available</h3>
                        <p class="text-gray-500">Pincode data for <?php echo htmlspecialchars($districtName); ?> district is being updated.</p>
                        <p class="text-gray-500">Please use the search function to find specific pincodes.</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Search Widget -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-search text-blue-600 mr-2"></i>
                        Search Pincode
                    </h3>
                    <form action="/pincode" method="GET" class="space-y-3">
                        <input type="text" name="search" placeholder="Enter pincode or area name" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                            <i class="fas fa-search mr-2"></i>Search
                        </button>
                    </form>
                </div>

                <!-- District Info -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                        About <?php echo htmlspecialchars($districtName); ?>
                    </h3>
                    <div class="text-gray-700 space-y-3">
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold">District:</span>
                            <span><?php echo htmlspecialchars($districtName); ?></span>
                        </div>
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold">State:</span>
                            <span><?php echo htmlspecialchars($stateName); ?></span>
                        </div>
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold">Country:</span>
                            <span>India</span>
                        </div>
                    </div>
                </div>

                <!-- Related Links -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-link text-blue-600 mr-2"></i>
                        Related Links
                    </h3>
                    <div class="space-y-2">
                        <a href="/pincode/<?php echo $stateSlug; ?>" class="block text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors">
                            <i class="fas fa-chevron-left text-xs mr-2"></i>Back to <?php echo htmlspecialchars($stateName); ?>
                        </a>
                        <a href="/pincode" class="block text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors">
                            <i class="fas fa-home text-xs mr-2"></i>All States & UTs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once '../footer.php'; ?>
</body>
</html>
        <?php
        return ob_get_clean();
    }
}

// Handle the request
if (isset($_GET['state'], $_GET['district'])) {
    $generator = new PincodeDistrictPage();
    echo $generator->generateDistrictPage($_GET['state'], $_GET['district']);
} else {
    header('Location: /pincode');
    exit;
}
?>