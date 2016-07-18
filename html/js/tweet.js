function TweetData() {
	var tweet = $("#tweet").val();
    var save = $("input[type=radio]:checked").val();
	
	$.post("trutherbot.php", { tweet: tweet, save: save },
    function(data) {
	 $('#results').html(data);
	 $('#trutherbot')[0].reset();
    });
}