class ChatbotBuilderAI:
    def build(self):
        return """<?php
if($_POST){
$q = strtolower($_POST['q']);
if(strpos($q,'pay')!==false) echo "You can pay via PayFast or EFT.";
elseif(strpos($q,'course')!==false) echo "Your courses unlock after payment.";
else echo "Hello, I am Bronwyn. How can I help?";
}
?>
<form method="post">
<input name="q" placeholder="Ask Bronwyn">
<button>Ask</button>
</form>"""
