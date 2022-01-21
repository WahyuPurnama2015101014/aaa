<?php

namespace App\Http\Controllers;

use App\Models\modelBarang;

use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    static function tabelZed()
    {
        $tbZed = collect([
            "-4.0" => ["0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000"],
            "-3.9" => ["0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000", "0.0000"],
            "-3.8" => ["0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001"],
            "-3.7" => ["0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001"],
            "-3.6" => ["0.0002", "0.0002", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001", "0.0001"],
            "-3.5" => ["0.0002", "0.0002", "0.0002", "0.0002", "0.0002", "0.0002", "0.0002", "0.0002", "0.0002", "0.0002"],
            "-3.4" => ["0.0003", "0.0003", "0.0003", "0.0003", "0.0003", "0.0003", "0.0003", "0.0003", "0.0003", "0.0002"],
            "-3.3" => ["0.0005", "0.0005", "0.0005", "0.0004", "0.0004", "0.0004", "0.0004", "0.0004", "0.0004", "0.0003"],
            "-3.2" => ["0.0007", "0.0007", "0.0006", "0.0006", "0.0006", "0.0006", "0.0006", "0.0005", "0.0005", "0.0005"],
            "-3.1" => ["0.0010", "0.0009", "0.0009", "0.0009", "0.0008", "0.0008", "0.0008", "0.0008", "0.0007", "0.0007"],
            "-3.0" => ["0.0013", "0.0013", "0.0013", "0.0012", "0.0012", "0.0011", "0.0011", "0.0011", "0.0010", "0.0010"],
            "-2.9" => ["0.0019", "0.0018", "0.0018", "0.0017", "0.0016", "0.0016", "0.0015", "0.0015", "0.0014", "0.0014"],
            "-2.8" => ["0.0026", "0.0025", "0.0024", "0.0023", "0.0023", "0.0022", "0.0021", "0.0021", "0.0020", "0.0019"],
            "-2.7" => ["0.0035", "0.0034", "0.0033", "0.0032", "0.0031", "0.0030", "0.0029", "0.0028", "0.0027", "0.0026"],
            "-2.6" => ["0.0047", "0.0045", "0.0044", "0.0043", "0.0041", "0.0040", "0.0039", "0.0038", "0.0037", "0.0036"],
            "-2.5" => ["0.0062", "0.0060", "0.0059", "0.0057", "0.0055", "0.0054", "0.0052", "0.0051", "0.0049", "0.0048"],
            "-2.4" => ["0.0082", "0.0080", "0.0078", "0.0075", "0.0073", "0.0071", "0.0069", "0.0068", "0.0066", "0.0064"],
            "-2.3" => ["0.0107", "0.0104", "0.0102", "0.0099", "0.0096", "0.0094", "0.0091", "0.0089", "0.0087", "0.0084"],
            "-2.2" => ["0.0139", "0.0136", "0.0132", "0.0129", "0.0125", "0.0122", "0.0119", "0.0116", "0.0113", "0.0110"],
            "-2.1" => ["0.0179", "0.0174", "0.0170", "0.0166", "0.0162", "0.0158", "0.0154", "0.0150", "0.0146", "0.0143"],
            "-2.0" => ["0.0228", "0.0222", "0.0217", "0.0212", "0.0207", "0.0202", "0.0197", "0.0192", "0.0188", "0.0183"],
            "-1.9" => ["0.0287", "0.0281", "0.0274", "0.0268", "0.0262", "0.0256", "0.0250", "0.0244", "0.0239", "0.0233"],
            "-1.8" => ["0.0359", "0.0351", "0.0344", "0.0336", "0.0329", "0.0322", "0.0314", "0.0307", "0.0301", "0.0294"],
            "-1.7" => ["0.0446", "0.0436", "0.0427", "0.0418", "0.0409", "0.0401", "0.0392", "0.0384", "0.0375", "0.0367"],
            "-1.6" => ["0.0548", "0.0537", "0.0526", "0.0516", "0.0505", "0.0495", "0.0485", "0.0475", "0.0465", "0.0455"],
            "-1.5" => ["0.0668", "0.0655", "0.0643", "0.0630", "0.0618", "0.0606", "0.0594", "0.0582", "0.0571", "0.0559"],
            "-1.4" => ["0.0808", "0.0793", "0.0778", "0.0764", "0.0749", "0.0735", "0.0721", "0.0708", "0.0694", "0.0681"],
            "-1.3" => ["0.0968", "0.0951", "0.0934", "0.0918", "0.0901", "0.0885", "0.0869", "0.0853", "0.0838", "0.0823"],
            "-1.2" => ["0.1151", "0.1131", "0.1112", "0.1093", "0.1075", "0.1056", "0.1038", "0.1020", "0.1003", "0.0985"],
            "-1.1" => ["0.1357", "0.1335", "0.1314", "0.1292", "0.1271", "0.1251", "0.1230", "0.1210", "0.1190", "0.1170"],
            "-1.0" => ["0.1587", "0.1562", "0.1539", "0.1515", "0.1492", "0.1469", "0.1446", "0.1423", "0.1401", "0.1379"],
            "-0.9" => ["0.1841", "0.1814", "0.1788", "0.1762", "0.1736", "0.1711", "0.1685", "0.1660", "0.1635", "0.1611"],
            "-0.8" => ["0.2119", "0.2090", "0.2061", "0.2033", "0.2005", "0.1977", "0.1949", "0.1922", "0.1894", "0.1867"],
            "-0.7" => ["0.2420", "0.2389", "0.2358", "0.2327", "0.2296", "0.2266", "0.2236", "0.2206", "0.2177", "0.2148"],
            "-0.6" => ["0.2743", "0.2709", "0.2676", "0.2643", "0.2611", "0.2578", "0.2546", "0.2514", "0.2483", "0.2451"],
            "-0.5" => ["0.3085", "0.3050", "0.3015", "0.2981", "0.2946", "0.2912", "0.2877", "0.2843", "0.2810", "0.2776"],
            "-0.4" => ["0.3446", "0.3409", "0.3372", "0.3336", "0.3300", "0.3264", "0.3228", "0.3192", "0.3156", "0.3121"],
            "-0.3" => ["0.3821", "0.3783", "0.3745", "0.3707", "0.3669", "0.3632", "0.3594", "0.3557", "0.3520", "0.3483"],
            "-0.2" => ["0.4207", "0.4168", "0.4129", "0.4090", "0.4052", "0.4013", "0.3974", "0.3936", "0.3897", "0.3859"],
            "-0.1" => ["0.4602", "0.4562", "0.4522", "0.4483", "0.4443", "0.4404", "0.4364", "0.4325", "0.4286", "0.4247"],
            "0.0" => ["0.5000", "0.4960", "0.4920", "0.4880", "0.4840", "0.4801", "0.4761", "0.4721", "0.4681", "0.4641"],
            "0.1" => ["0.5398", "0.5359", "0.5319", "0.5279", "0.5239", "0.5199", "0.5160", "0.5120", "0.5080", "0.5040"],
            "0.2" => ["0.5793", "0.5753", "0.5714", "0.5675", "0.5636", "0.5596", "0.5557", "0.5517", "0.5478", "0.5438"],
            "0.3" => ["0.6179", "0.6141", "0.6103", "0.6064", "0.6026", "0.5987", "0.5948", "0.5910", "0.5871", "0.5832"],
            "0.4" => ["0.6554", "0.6517", "0.6480", "0.6443", "0.6406", "0.6368", "0.6331", "0.6293", "0.6255", "0.6217"],
            "0.5" => ["0.6915", "0.6879", "0.6844", "0.6808", "0.6772", "0.6736", "0.6700", "0.6664", "0.6628", "0.6591"],
            "0.6" => ["0.7257", "0.7224", "0.7190", "0.7157", "0.7123", "0.7088", "0.7054", "0.7019", "0.6985", "0.6950"],
            "0.7" => ["0.7580", "0.7549", "0.7517", "0.7486", "0.7454", "0.7422", "0.7389", "0.7357", "0.7324", "0.7291"],
            "0.8" => ["0.7881", "0.7852", "0.7823", "0.7794", "0.7764", "0.7734", "0.7704", "0.7673", "0.7642", "0.7611"],
            "0.9" => ["0.8159", "0.8133", "0.8106", "0.8078", "0.8051", "0.8023", "0.7995", "0.7967", "0.7939", "0.7910"],
            "1.0" => ["0.8413", "0.8389", "0.8365", "0.8340", "0.8315", "0.8289", "0.8264", "0.8238", "0.8212", "0.8186"],
            "1.1" => ["0.8643", "0.8621", "0.8599", "0.8577", "0.8554", "0.8531", "0.8508", "0.8485", "0.8461", "0.8438"],
            "1.2" => ["0.8849", "0.8830", "0.8810", "0.8790", "0.8770", "0.8749", "0.8729", "0.8708", "0.8686", "0.8665"],
            "1.3" => ["0.9032", "0.9015", "0.8997", "0.8980", "0.8962", "0.8944", "0.8925", "0.8907", "0.8888", "0.8869"],
            "1.4" => ["0.9192", "0.9177", "0.9162", "0.9147", "0.9131", "0.9115", "0.9099", "0.9082", "0.9066", "0.9049"],
            "1.5" => ["0.9332", "0.9319", "0.9306", "0.9292", "0.9279", "0.9265", "0.9251", "0.9236", "0.9222", "0.9207"],
            "1.6" => ["0.9452", "0.9441", "0.9429", "0.9418", "0.9406", "0.9394", "0.9382", "0.9370", "0.9357", "0.9345"],
            "1.7" => ["0.9554", "0.9545", "0.9535", "0.9525", "0.9515", "0.9505", "0.9495", "0.9484", "0.9474", "0.9463"],
            "1.8" => ["0.9641", "0.9633", "0.9625", "0.9616", "0.9608", "0.9599", "0.9591", "0.9582", "0.9573", "0.9564"],
            "1.9" => ["0.9713", "0.9706", "0.9699", "0.9693", "0.9686", "0.9678", "0.9671", "0.9664", "0.9656", "0.9649"],
            "2.0" => ["0.9772", "0.9767", "0.9761", "0.9756", "0.9750", "0.9744", "0.9738", "0.9732", "0.9726", "0.9719"],
            "2.1" => ["0.9821", "0.9817", "0.9812", "0.9808", "0.9803", "0.9798", "0.9793", "0.9788", "0.9783", "0.9778"],
            "2.2" => ["0.9861", "0.9857", "0.9854", "0.9850", "0.9846", "0.9842", "0.9838", "0.9834", "0.9830", "0.9826"],
            "2.3" => ["0.9893", "0.9890", "0.9887", "0.9884", "0.9881", "0.9878", "0.9875", "0.9871", "0.9868", "0.9864"],
            "2.4" => ["0.9918", "0.9916", "0.9913", "0.9911", "0.9909", "0.9906", "0.9904", "0.9901", "0.9898", "0.9896"],
            "2.5" => ["0.9938", "0.9936", "0.9934", "0.9932", "0.9931", "0.9929", "0.9927", "0.9925", "0.9922", "0.9920"],
            "2.6" => ["0.9953", "0.9952", "0.9951", "0.9949", "0.9948", "0.9946", "0.9945", "0.9943", "0.9941", "0.9940"],
            "2.7" => ["0.9965", "0.9964", "0.9963", "0.9962", "0.9961", "0.9960", "0.9959", "0.9957", "0.9956", "0.9955"],
            "2.8" => ["0.9974", "0.9974", "0.9973", "0.9972", "0.9971", "0.9970", "0.9969", "0.9968", "0.9967", "0.9966"],
            "2.9" => ["0.9981", "0.9981", "0.9980", "0.9979", "0.9979", "0.9978", "0.9977", "0.9977", "0.9976", "0.9975"],
            "3.0" => ["0.9987", "0.9986", "0.9986", "0.9985", "0.9985", "0.9984", "0.9984", "0.9983", "0.9982", "0.9982"],
            "3.1" => ["0.9990", "0.9990", "0.9990", "0.9989", "0.9989", "0.9989", "0.9988", "0.9988", "0.9987", "0.9987"],
            "3.2" => ["0.9993", "0.9993", "0.9993", "0.9992", "0.9992", "0.9992", "0.9992", "0.9991", "0.9991", "0.9991"],
            "3.3" => ["0.9995", "0.9995", "0.9995", "0.9995", "0.9994", "0.9994", "0.9994", "0.9994", "0.9994", "0.9993"],
            "3.4" => ["0.9997", "0.9997", "0.9996", "0.9996", "0.9996", "0.9996", "0.9996", "0.9996", "0.9995", "0.9995"],
            "3.5" => ["0.9998", "0.9998", "0.9997", "0.9997", "0.9997", "0.9997", "0.9997", "0.9997", "0.9997", "0.9997"],
            "3.6" => ["0.9998", "0.9998", "0.9998", "0.9998", "0.9998", "0.9998", "0.9998", "0.9998", "0.9998", "0.9998"],
            "3.7" => ["0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9998"],
            "3.8" => ["0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999"],
            "3.9" => ["1.0000", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999", "0.9999"],
            "4.0" => ["1.0000", "1.0000", "1.0000", "1.0000", "1.0000", "1.0000", "1.0000", "1.0000", "1.0000", "1.0000"],
        ]);
        return $tbZed;
    }
    static function tabelFrek($barang)
    {
        $datas = [
            "mean" => [
                "data1" => number_format($barang->avg('data1'), 2, '.', ''),
                "data2" => number_format($barang->avg('data2'), 2, '.', '')
            ],
            "min" => [
                "data1" => $barang->min('data1'),
                "data2" => $barang->min('data2')
            ],
            "max" => [
                "data1" => $barang->max('data1'),
                "data2" => $barang->max('data2')
            ],
            "jSD1" => $barang->countBy('data1')->sortBy("data1"),
            "jSD2" => $barang->countBy('data2')->sortBy("data2"),
            "uD1" => $barang->unique('data1')->sortBy("data1"),
            "uD2" => $barang->unique('data2')->sortBy("data2")
        ];
        return $datas;
    }
    static function tabelBergolong($barang)
    {
        $data = mainController::tabelFrek($barang);
        $N =  $barang->count('nama');
        $datas = [
            "n" => $N,
            "mean" => $data["mean"],
            "kelas" => round((1 + 3.3 * log10($N)), 0, PHP_ROUND_HALF_UP),
            "data1" => [
                "rentang" => $data["max"]["data1"] - $data["min"]["data1"],
                "interval", "FX" => 0, //"FXpow" => 0,
                "X" => [], "X-mean^2" => [],
                "kelasDepan" => [($data["min"]["data1"] + 1),],
                "kelasBelakang" => [], "kelas" => [],
                "freqKelas" => [],
                "ragam" => 0, "simpanganBaku" => 0
            ],
            "data2" => [
                "rentang" => $data["max"]["data2"] - $data["min"]["data2"],
                "interval", "FX" => 0, //"FXpow" => 0,
                "X" => [], "X-mean^2" => [],
                "kelasDepan" => [($data["min"]["data2"] + 1),],
                "kelasBelakang" => [], "kelas" => [],
                "freqKelas" => [],
                "ragam" => 0, "simpanganBaku" => 0
            ],
        ];
        $datas["data1"]["interval"] = round(($datas["data1"]["rentang"] / $datas["kelas"]), 0, PHP_ROUND_HALF_UP);
        $datas["data2"]["interval"] = round(($datas["data2"]["rentang"] / $datas["kelas"]), 0, PHP_ROUND_HALF_UP);

        for ($i = 1; $i < $datas["kelas"]; $i++) { //kelas depan
            $datas["data1"]["kelasDepan"][$i] = $datas["data1"]["kelasDepan"][$i - 1] + $datas["data1"]["interval"];
            $datas["data2"]["kelasDepan"][$i] = $datas["data2"]["kelasDepan"][$i - 1] + $datas["data2"]["interval"];
        }
        for ($i = 0; $i < $datas["kelas"]; $i++) {
            //kelas belakang
            $datas["data1"]["kelasBelakang"][$i] =  $datas["data1"]["kelasDepan"][$i] + ($datas["data1"]["interval"] - 1);
            $datas["data2"]["kelasBelakang"][$i] =  $datas["data2"]["kelasDepan"][$i] + ($datas["data2"]["interval"] - 1);
            //kelompok data
            $datas["data1"]["kelas"][$i] = $datas["data1"]["kelasDepan"][$i] . " - " . $datas["data1"]["kelasBelakang"][$i];
            $datas["data2"]["kelas"][$i] = $datas["data2"]["kelasDepan"][$i] . " - " . $datas["data2"]["kelasBelakang"][$i];
            //frekuensi kelas
            $datas["data1"]["freqKelas"][$i] = ($barang->whereBetween('data1', [$datas["data1"]["kelasDepan"][$i], $datas["data1"]["kelasBelakang"][$i]]))->count();
            $datas["data2"]["freqKelas"][$i] = ($barang->whereBetween('data2', [$datas["data2"]["kelasDepan"][$i], $datas["data2"]["kelasBelakang"][$i]]))->count();
            //median
            $datas["data1"]["X"][$i] = ($datas["data1"]["kelasDepan"][$i] +  $datas["data1"]["kelasBelakang"][$i]) / 2;
            $datas["data2"]["X"][$i] = ($datas["data2"]["kelasDepan"][$i] +  $datas["data2"]["kelasBelakang"][$i]) / 2;
            //(median - mean )^2
            $datas["data1"]["X-mean^2"][$i] = pow(($datas["data1"]["X"][$i] - $data["mean"]["data1"]), 2);
            $datas["data2"]["X-mean^2"][$i] = pow(($datas["data2"]["X"][$i] - $data["mean"]["data2"]), 2);
            //apalah
            $datas["data1"]["FX"] += ($datas["data1"]["freqKelas"][$i] * $datas["data1"]["X-mean^2"][$i]);
            $datas["data2"]["FX"] += ($datas["data2"]["freqKelas"][$i] * $datas["data2"]["X-mean^2"][$i]);
            //F*X kuadrat
            // $datas["data1"]["FXpow"] += ($datas["data1"]["freqKelas"][$i] * $datas["data1"]["Xpow"][$i]);
            // $datas["data2"]["FXpow"] += ($datas["data2"]["freqKelas"][$i] * $datas["data2"]["Xpow"][$i]);
        }
        // ragam 
        $datas["data1"]["ragam"] = $datas["data1"]["FX"] / $N;
        $datas["data2"]["ragam"] = $datas["data2"]["FX"] / $N;
        // simpangan baku
        $datas["data1"]["simpanganBaku"] = sqrt($datas["data1"]["ragam"]);
        $datas["data2"]["simpanganBaku"] = sqrt($datas["data2"]["ragam"]);

        return $datas;
    }
    static function chiTabel()
    {
        $datas = ["0.05" => [
            "1" => 3.841458821,
            "2" => 5.991464547,
            "3" => 7.814727903,
            "4" => 9.487729037,
            "5" => 11.07049769,
            "6" => 12.59158724,
            "7" => 14.06714045,
            "8" => 15.50731306,
            "9" => 16.9189776,
            "10" => 18.30703805,
            "11" => 19.67513757,
            "12" => 21.02606982,
            "13" => 22.36203249,
            "14" => 23.6847913,
            "15" => 24.99579014,
            "16" => 26.2962276,
            "17" => 27.58711164,
            "18" => 28.86929943,
            "19" => 30.14352721,
            "20" => 31.41043284,
            "21" => 32.67057334,
            "22" => 33.92443847,
            "23" => 35.17246163,
            "24" => 36.4150285,
            "25" => 37.65248413,
            "26" => 38.88513866,
            "27" => 40.11327207,
            "28" => 41.33713815,
            "29" => 42.5569678,
            "30" => 43.77297183,
        ]];
        return $datas;
    }
    static function chi($var)
    {
        $ber = mainController::tabelBergolong($var);
        $tbZed = mainController::tabelZed();
        $chiTabel = mainController::chiTabel();
        $datas = [
            "data1" => [
                "kelompok" => $ber["data1"]["kelas"], "F" => $ber["data1"]["freqKelas"],
                "batasKelas" => [], "batasKelas1" => [], "batasKelas2" => [],
                "frekHarapan" => [], "Zhitung" => [], "Zhitung1" => [], "Zhitung2" => [],
                "Ztabel" => [], "Ztabel1" => [], "Ztabel2" => [], "luas" => [],
                "Chi" => [], "ChiTotal" => 0, "kesimpulan"
            ],
            "data2" => [
                "kelompok" => $ber["data2"]["kelas"], "F" => $ber["data2"]["freqKelas"],
                "batasKelas" => [], "batasKelas1" => [], "batasKelas2" => [],
                "frekHarapan" => [], "Zhitung" => [], "Zhitung1" => [], "Zhitung2" => [],
                "Ztabel" => [], "Ztabel1" => [], "Ztabel2" => [], "luas" => [],
                "Chi" => [], "ChiTotal" => 0, "kesimpulan"
            ],
            "dB" => $ber["n"] - 2,
            "k" => $ber["kelas"],
        ];
        for ($i = 0; $i < $ber["kelas"]; $i++) {
            //batas kelas
            $datas["data1"]["batasKelas1"][$i] = $ber["data1"]["kelasDepan"][$i] - 0.5;
            $datas["data2"]["batasKelas1"][$i] = $ber["data2"]["kelasDepan"][$i] - 0.5;
            $datas["data1"]["batasKelas2"][$i] = $ber["data1"]["kelasBelakang"][$i] + 0.5;
            $datas["data2"]["batasKelas2"][$i] = $ber["data2"]["kelasBelakang"][$i] + 0.5;
            $datas["data1"]["batasKelas"][$i] = $datas["data1"]["batasKelas1"][$i] . " - " . $datas["data1"]["batasKelas2"][$i];
            $datas["data2"]["batasKelas"][$i] = $datas["data2"]["batasKelas1"][$i] . " - " . $datas["data2"]["batasKelas2"][$i];
            //Z hitung
            $datas["data1"]["Zhitung1"][$i] = number_format((round((($datas["data1"]["batasKelas1"][$i] - $ber["mean"]["data1"]) / $ber["data1"]["simpanganBaku"]), 2)), 2, '.', '');
            $datas["data2"]["Zhitung1"][$i] = number_format((round((($datas["data2"]["batasKelas1"][$i] - $ber["mean"]["data2"]) / $ber["data2"]["simpanganBaku"]), 2)), 2, '.', '');
            $datas["data1"]["Zhitung2"][$i] = number_format((round((($datas["data1"]["batasKelas2"][$i] - $ber["mean"]["data1"]) / $ber["data1"]["simpanganBaku"]), 2)), 2, '.', '');
            $datas["data2"]["Zhitung2"][$i] = number_format((round((($datas["data2"]["batasKelas2"][$i] - $ber["mean"]["data2"]) / $ber["data2"]["simpanganBaku"]), 2)), 2, '.', '');
            $datas["data1"]["Zhitung"][$i] = $datas["data1"]["Zhitung1"][$i] . " dan " . $datas["data1"]["Zhitung2"][$i];
            $datas["data2"]["Zhitung"][$i] = $datas["data2"]["Zhitung1"][$i] . " dan " . $datas["data2"]["Zhitung2"][$i];
            //index untuk mengambil tabel z
            $zD1 = number_format(((($datas["data1"]["Zhitung1"][$i] * 100) - (($datas["data1"]["Zhitung1"][$i] * 100) % 10)) / 100), 1, '.', '');
            $zD2 = number_format(((($datas["data2"]["Zhitung1"][$i] * 100) - (($datas["data2"]["Zhitung1"][$i] * 100) % 10)) / 100), 1, '.', '');
            $zB1 = number_format(((($datas["data1"]["Zhitung2"][$i] * 100) - (($datas["data1"]["Zhitung2"][$i] * 100) % 10)) / 100), 1, '.', '');
            $zB2 = number_format(((($datas["data2"]["Zhitung2"][$i] * 100) - (($datas["data2"]["Zhitung2"][$i] * 100) % 10)) / 100), 1, '.', '');
            $iD1 = abs(($datas["data1"]["Zhitung1"][$i] * 100) % 10);
            $iD2 = abs(($datas["data2"]["Zhitung1"][$i] * 100) % 10);
            $iB1 = abs(($datas["data1"]["Zhitung2"][$i] * 100) % 10);
            $iB2 = abs(($datas["data2"]["Zhitung2"][$i] * 100) % 10);
            // mengambil dari Z tabel
            $datas["data1"]["Ztabel1"][$i] = $tbZed[$zD1][$iD1];
            $datas["data2"]["Ztabel1"][$i] = $tbZed[$zD2][$iD2];
            $datas["data1"]["Ztabel2"][$i] = $tbZed[$zB1][$iB1];
            $datas["data2"]["Ztabel2"][$i] = $tbZed[$zB2][$iB2];
            $datas["data1"]["Ztabel"][$i] = $datas["data1"]["Ztabel1"][$i] . " dan " . $datas["data1"]["Ztabel2"][$i];
            $datas["data2"]["Ztabel"][$i] = $datas["data2"]["Ztabel1"][$i] . " dan " . $datas["data2"]["Ztabel2"][$i];
            //luas / proporsisi
            $datas["data1"]["luas"][$i] = abs(number_format(($datas["data1"]["Ztabel1"][$i] - $datas["data1"]["Ztabel2"][$i]), 4, '.', ''));
            $datas["data2"]["luas"][$i] = abs(number_format(($datas["data2"]["Ztabel1"][$i] - $datas["data2"]["Ztabel2"][$i]), 4, '.', ''));
            //frekuensi harapan
            $datas["data1"]["frekHarapan"][$i] = $datas["data1"]["luas"][$i] * $ber["n"];
            $datas["data2"]["frekHarapan"][$i] = $datas["data2"]["luas"][$i] * $ber["n"];
            // chi kuadrat
            $datas["data1"]["Chi"][$i] = number_format((pow($ber["data1"]["freqKelas"][$i] - $datas["data1"]["frekHarapan"][$i], 2) / $datas["data1"]["frekHarapan"][$i]), 4, '.', '');
            $datas["data2"]["Chi"][$i] = number_format((pow($ber["data2"]["freqKelas"][$i] - $datas["data2"]["frekHarapan"][$i], 2) / $datas["data2"]["frekHarapan"][$i]), 4, '.', '');
            $datas["data1"]["ChiTotal"] += $datas["data1"]["Chi"][$i];
            $datas["data2"]["ChiTotal"] += $datas["data2"]["Chi"][$i];
        }
        return $datas;
    }
    static function lili($var)
    {
        $data = mainController::tabelFrek($var);
        $ber = mainController::tabelBergolong($var);
        $tbZed = mainController::tabelZed();
        $datas = [
            "data1" => [
                "N", "Y" => collect([]), "Fkum" => [$data["jSD1"][$data["min"]["data1"]],], "Zi" => [],
                "FZi" => [], "SZi" => [], "lili" => collect([]), "lilimax"
            ],
            "data2" => [
                "N", "Y" => collect([]), "Fkum" => [$data["jSD2"][$data["min"]["data2"]],], "Zi" => [],
                "FZi" => [], "SZi" => [], "lili" => collect([]), "lilimax"
            ],

        ];
        $i = 0;
        foreach ($data["uD1"] as $f) {
            $datas["data1"]["Y"][$i] = $f->data1;
            $i++;
        };
        $i = 0;
        foreach ($data["uD2"] as $f) {
            $datas["data2"]["Y"][$i] = $f->data2;
            $i++;
        };
        $N1 = $datas["data1"]["Y"]->count();
        $N2 = $datas["data2"]["Y"]->count();
        $datas["data1"]["N"] = $N1;
        $datas["data2"]["N"] = $N2;
        for ($j = 1; $j < $N1; $j++) {
            $datas["data1"]["Fkum"][$j] = $datas["data1"]["Fkum"][$j - 1] + $data["jSD1"][$datas["data1"]["Y"][$j]];
        };
        for ($j = 1; $j < $N2; $j++) {
            $datas["data2"]["Fkum"][$j] = $datas["data2"]["Fkum"][$j - 1] + $data["jSD2"][$datas["data2"]["Y"][$j]];
        };
        for ($i = 0; $i < $N1; $i++) {
            $datas["data1"]["Zi"][$i] = number_format((round((($datas["data1"]["Y"][$i] - $data["mean"]["data1"]) / $ber["data1"]["simpanganBaku"]), 2)), 2, '.', '');
            $datas["data1"]["FZi"][$i] = $tbZed[number_format(((($datas["data1"]["Zi"][$i] * 100) - (($datas["data1"]["Zi"][$i] * 100) % 10)) / 100), 1, '.', '')][abs(($datas["data1"]["Zi"][$i] * 100) % 10)];
            $datas["data1"]["SZi"][$i] = number_format((round((($data["jSD1"][$datas["data1"]["Y"][$i]] / $ber["n"])), 4)), 4, '.', '');
            $datas["data1"]["lili"][$i] = abs($datas["data1"]["FZi"][$i] - $datas["data1"]["SZi"][$i]);
        }
        for ($i = 0; $i < $N2; $i++) {
            $datas["data2"]["Zi"][$i] = number_format((round((($datas["data2"]["Y"][$i] - $data["mean"]["data2"]) / $ber["data2"]["simpanganBaku"]), 2)), 2, '.', '');
            $datas["data2"]["FZi"][$i] = $tbZed[number_format(((($datas["data2"]["Zi"][$i] * 100) - (($datas["data2"]["Zi"][$i] * 100) % 10)) / 100), 1, '.', '')][abs(($datas["data2"]["Zi"][$i] * 100) % 10)];
            $datas["data2"]["SZi"][$i] = number_format((round((($data["jSD2"][$datas["data2"]["Y"][$i]] / $ber["n"])), 4)), 4, '.', '');
            $datas["data2"]["lili"][$i] = abs($datas["data2"]["FZi"][$i] - $datas["data2"]["SZi"][$i]);
        }
        $datas["data1"]["lilimax"] = $datas["data1"]["lili"]->max();
        $datas["data2"]["lilimax"] = $datas["data2"]["lili"]->max();
        return $datas;
    }
    static function korelasiPM($var)
    {
        $datas = [
            "N" => $var->count('nama'),
            "mean1" => number_format($var->avg('data1'), 2, '.', ''),
            "mean2" => number_format($var->avg('data2'), 2, '.', ''),
            "X" => [], "Y" => [],
            "x" => [], "y" => [],
            "xPowt" => 0, "yPowt" => 0,
            "xPow" => [], "yPow" => [],
            "xy" => [], "xyTotal" => 0,
            "korelasi" => 0, "T" => 0
        ];
        $i = 0;
        foreach ($var as $data) {
            //variabel X Y
            $datas["X"][$i] = $data->data1;
            $datas["Y"][$i] = $data->data2;
            //x y
            $datas["x"][$i] = $datas["X"][$i] - $datas["mean1"];
            $datas["y"][$i] = $datas["Y"][$i] - $datas["mean2"];
            //x y kuadrat 
            $datas["xPow"][$i] = number_format(pow($datas["x"][$i], 2), 2, '.', '');
            $datas["yPow"][$i] = number_format(pow($datas["y"][$i], 2), 2, '.', '');
            $datas["xPowt"] += $datas["xPow"][$i];
            $datas["yPowt"] += $datas["yPow"][$i];
            //xy
            $datas["xy"][$i] = $datas["x"][$i] * $datas["y"][$i];
            $datas["xyTotal"] += $datas["xy"][$i];
            $i++;
        };
        $datas["korelasi"] =  number_format($datas["xyTotal"] / sqrt($datas["xPowt"] * $datas["yPowt"]), 2, '.', '');
        $datas["T"] =  number_format( // r / akar((1 - r^2) / (N - 2))
            $datas["korelasi"] / sqrt((1 - pow($datas["korelasi"], 2)) / ($datas["N"] - 2)),
            5,
            '.',
            ''
        );

        return $datas;
    }
    static function ujiTFMean($var)
    {
        $tabel = mainController::tabelBergolong($var);
        $r = mainController::korelasiPM($var);
        $datas = [
            "n" => $var->count('nama'),
            "ujiT" => 0, "ujiFisher" => 0,
            "X1" => collect([]), "X2" => collect([]), "Xtot" => collect([]),
            "X1^2" => collect([]), "X2^2" => collect([]), "Xtot^2" => collect([]),
            "X1sum" => 0, "X2sum" => 0, "Xtotsum" => 0,
            "X1^2sum" => 0, "X2^2sum" => 0, "Xtot^2sum" => 0,
            "JKtot" => 0, "JKantar" => 0, "JKd" => 0,
            "Fhitung" => 0, "RJKantar" => 0, "RJKd" => 0,
        ];
        // uji T
        $pembilang = $tabel["mean"]["data1"] - $tabel["mean"]["data2"];
        $penyebut1 = $tabel["data1"]["ragam"] / $tabel["n"] + $tabel["data2"]["ragam"] / $tabel["n"];
        $penyebut2 = 2 * $r["korelasi"] *
            ($tabel["data1"]["simpanganBaku"] / sqrt($tabel["n"])) *
            ($tabel["data2"]["simpanganBaku"] / sqrt($tabel["n"]));
        $datas["ujiT"] = number_format(($pembilang / sqrt($penyebut1 - $penyebut2)), 2, '.', '');
        //uji fisher
        ($tabel["data1"]["ragam"] > $tabel["data2"]["ragam"]) ?
            $datas["ujiFisher"] = $tabel["data1"]["ragam"] / $tabel["data2"]["ragam"] :
            $datas["ujiFisher"] = $tabel["data2"]["ragam"] / $tabel["data1"]["ragam"];
        //anova
        $i = 0;
        foreach ($var as $data) {
            $datas["X1"][$i] = $data->data1;
            $datas["X2"][$i] = $data->data2;
            $datas["Xtot"][$i] = $datas["X1"][$i] + $datas["X2"][$i];
            $datas["X1^2"][$i] = pow($datas["X1"][$i], 2);
            $datas["X2^2"][$i] = pow($datas["X2"][$i], 2);
            $datas["Xtot^2"][$i] =  $datas["X1^2"][$i] + $datas["X2^2"][$i];
            $i++;
        }
        //sum
        $datas["X1sum"] = $datas["X1"]->sum();
        $datas["X2sum"] = $datas["X2"]->sum();
        $datas["Xtotsum"] = $datas["Xtot"]->sum();
        $datas["X1^2sum"] = $datas["X1^2"]->sum();
        $datas["X2^2sum"] = $datas["X2^2"]->sum();
        $datas["Xtot^2sum"] = $datas["Xtot^2"]->sum();
        //Any JK
        $datas["JKtot"] =  $datas["Xtot^2sum"] - pow($datas["Xtotsum"], 2) / ($datas["n"] * 2);
        $JKa1 = pow($datas["X1sum"], 2) / $datas["n"];
        $JKa2 = pow($datas["X2sum"], 2) / $datas["n"];
        $JKatot = pow($datas["Xtotsum"], 2) / ($datas["n"] * 2);
        $datas["JKantar"] = $JKa1 + $JKa2 - $JKatot;
        $datas["JKd"] = $datas["JKtot"] - $datas["JKantar"];
        //any RJK
        $datas["RJKantar"] = $datas["JKantar"] / 1;
        $datas["RJKd"] = $datas["JKd"] / ($datas["n"] * 2 - 2);
        $datas["Fhitung"] = $datas["RJKantar"] / $datas["RJKd"];

        return $datas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = modelBarang::all();
        $tbFrek = mainController::tabelFrek($barang);
        return view('dashboard', compact('barang', 'tbFrek',));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataBergolong()
    {
        $barang = modelBarang::all();
        $tabel = mainController::tabelBergolong($barang);
        return view('dhs.dataBer', compact('barang', 'tabel'));
    }
    public function chiKuadrat()
    {
        $barang = modelBarang::all();
        $tabel = mainController::chi($barang);
        $n = $tabel["k"];
        if (isset($_GET['data']) && $_GET['data'] != null) {
            $s = $_GET['data'];
            if ($s == 2) {
                $title = "Data 2";
                $tabel = $tabel["data2"];
            } else {
                $title = "Data 1";
                $tabel = $tabel["data1"];
            }
        } else {
            $title = "Data 1";
            $tabel = $tabel["data1"];
        }
        return view('dhs.chiKuadrat', compact('barang', 'tabel', 'n', 'title'));
    }
    public function liliefors()
    {
        $barang = modelBarang::all();
        $tabel = mainController::lili($barang);
        if (isset($_GET['data']) && $_GET['data'] != null) {
            $s = $_GET['data'];
            if ($s == 2) {
                $title = "Data 2";
                $tabel = $tabel["data2"];
            } else {
                $title = "Data 1";
                $tabel = $tabel["data1"];
            }
        } else {
            $title = "Data 1";
            $tabel = $tabel["data1"];
        }
        return view('dhs.llili', compact('barang', 'tabel', 'title'));
    }
    public function korelasiPearson()
    {
        $barang = modelBarang::all();
        $korelasi = mainController::korelasiPM($barang);
        return view('dhs.korelasiPearson', compact('barang', 'korelasi'));
    }
    public function ujimean()
    {
        $barang = modelBarang::all();
        $uji = mainController::ujiTFMean($barang);
        return view('dhs.ujiMean', compact('barang', 'uji'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = "Tambah Data";
        return view('dhs.create', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //untuk menyimpan data
        $validasi = $request->validate([
            'nama' => 'required',
            'data1' => 'required',
            'data2' => 'required',
        ]);
        try {
            $response = modelBarang::create($validasi);
            return redirect('dashboard');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan data edit
        $judul = "Tambah Data ";
        $barang = modelBarang::find($id);
        if ($barang != NULL) {
            $judul = "Edit Data " . $barang->nama;
            return view('dhs.create', compact('judul', 'barang'));
        } else {
            return view('dhs.create', compact('judul',));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'data1' => 'required',
            'data2' => 'required',
        ]);
        try {
            $response = modelBarang::find($id);
            $response->update($validasi);
            return redirect('dashboard');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $barang = modelBarang::find($id);
            $barang->delete();
            return redirect('dashboard');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
