class PayoutAI:
    def build(self):
        return """<?php
$total = 10000; // example weekly revenue

$payouts = [
  "owners_35" => $total * 0.35,
  "african_bank_15" => $total * 0.15,
  "ai_fnb_20" => $total * 0.20,
  "reserve_20" => $total * 0.20,
  "compound_10" => $total * 0.10
];

foreach($payouts as $k=>$v){
  echo $k.": R".$v."<br>";
}
?>"""
