{"filter":false,"title":"token_charge.php","tooltip":"/btTest/token_charge.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":2},"end":{"row":21,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"887a67d1eb59a0133b1ae2bfe3c0b612a9359dc7","undoManager":{"mark":62,"position":62,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":3},"action":"insert","lines":["$result = Braintree_Transaction::sale([","  'amount' => '100.00',","  'paymentMethodNonce' => nonceFromTheClient,","  'options' => [","    'submitForSettlement' => True","  ]","]);"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":4}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"],"id":5}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"],"id":6}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"],"id":7}],[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"],"id":8}],[{"start":{"row":8,"column":3},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["?"],"id":11}],[{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":[">"],"id":12}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["require_once \"/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php\";",""],"id":14}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":15}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":16}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":21},"action":"remove","lines":["paymentMethodNonce"],"id":17},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["t"]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["o"],"id":18}],[{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["k"],"id":19}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["e"],"id":20}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["n"],"id":21}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":31},"action":"remove","lines":["nonceFromTheClient"],"id":22},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["$"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["_"],"id":23}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["P"],"id":24}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["O"],"id":25}],[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["S"],"id":26}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["T"],"id":27}],[{"start":{"row":6,"column":19},"end":{"row":6,"column":21},"action":"insert","lines":["[]"],"id":28}],[{"start":{"row":6,"column":20},"end":{"row":6,"column":22},"action":"insert","lines":["\"\""],"id":29}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["t"],"id":30}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["o"],"id":31}],[{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["k"],"id":32}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["e"],"id":33}],[{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["n"],"id":34}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["0"],"id":35}],[{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":36}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":14},"action":"insert","lines":["echo \"<h2>Result:</h2><br> <pre>\";","var_dump($result);","echo \"</pre>\";"],"id":37}],[{"start":{"row":14,"column":14},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":38}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":39}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":12},"action":"insert","lines":["echo \"<a href=\\\"https://mybt-magarvin.c9.io/btTest/index.php\\\">Return To Menu</a>\";","echo \"</p>\";"],"id":40}],[{"start":{"row":3,"column":12},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":41}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":42}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":43}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["p"],"id":44}],[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["r"],"id":45}],[{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["i"],"id":46}],[{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["n"],"id":47}],[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["t"],"id":48}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["_"],"id":49}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["r"],"id":50}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":9},"action":"insert","lines":["()"],"id":51}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["$"],"id":52}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["_"],"id":53}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["P"],"id":54}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["O"],"id":55}],[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["S"],"id":56}],[{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["T"],"id":57}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":[";"],"id":58}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":8},"action":"remove","lines":["token"],"id":59},{"start":{"row":11,"column":3},"end":{"row":11,"column":21},"action":"insert","lines":["paymentMethodToken"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["/"],"id":60}],[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["/"],"id":61}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":17},"action":"remove","lines":["10"],"id":62},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":["2"]}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["5"],"id":63}]]},"timestamp":1438889908000}