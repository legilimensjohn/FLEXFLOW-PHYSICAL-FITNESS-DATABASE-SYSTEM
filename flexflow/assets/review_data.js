if (bmi < 18.5) {
    document.getElementById("bmi").innerHTML = "Underweight";
    document.getElementById("bmi_info").innerHTML = "A well-balanced and nutrient-rich diet"
        + " is required to achieve a healthy weight. It is recommended to eat meals high in healthy"
        + " fats, proteins, and carbohydrates.";
}
else if (bmi >= 18.5 && bmi < 25) {
    document.getElementById("bmi").innerHTML = "Normal";
    document.getElementById("bmi_info").innerHTML = "Continue to consume a well-balanced diet rich"
        + " in a variety of nutrients. Regular physical activity is also highly recommended for"
        + " improving general well-being and health.";
}
else if (bmi >= 25 && bmi < 30) {
    document.getElementById("bmi").innerHTML = "Overweight";
    document.getElementById("bmi_info").innerHTML = "It is recommended to switch to a"
        + " well-balanced diet that places a strong emphasis on portion control. By monitoring how much"
        + " food is ate. Getting more exercise will also assist in leading a healthier lifestyle.";
}
else if (bmi >= 30 && bmi < 35) {
    document.getElementById("bmi").innerHTML = "Obese I";
    document.getElementById("bmi_info").innerHTML = "Focus on a balanced, calorie-controlled diet"
        + " with emphasis on whole foods. Incorporate at least 150 minutes of moderate-intensity exercise"
        + " per week, gradually increasing activity levels.";
}
else if (bmi >= 35 && bmi < 40) {
    document.getElementById("bmi").innerHTML = "Obese II";
    document.getElementById("bmi_info").innerHTML = "Implement a calorie-deficit diet, emphasizing"
        + " nutrient-dense foods. Engage in regular exercise, including both aerobic and strength training,"
        + " aiming for at least 150 minutes per week.";
}
else if (bmi >= 40) {
    document.getElementById("bmi").innerHTML = "Obese III";
    document.getElementById("bmi_info").innerHTML = "Prioritize a medically supervised weight loss plan,"
        + " combining a calorie-restricted diet with increased physical activity. Consult healthcare"
        + " professionals for personalized guidance, considering potential interventions like surgery if"
        + " appropriate.";
}

switch (gender) {
    case 'M':
        if (waistline <= 94.9) document.getElementById("waistline").innerHTML = "Normal";
        else if (waistline > 94.9 && waistline < 102) document.getElementById("waistline").innerHTML = "High Risk";
        else if (waistline >= 102) document.getElementById("waistline").innerHTML = "Very High Risk";

        if (bpm_rest < 71) document.getElementById("bpm_rest").innerHTML = "Good";
        else if (bpm_rest > 75) document.getElementById("bpm_rest").innerHTML = "Poor";
        else document.getElementById("bpm_rest").innerHTML = "Average";

        if (jog_time > 13.5) document.getElementById("jog_time").innerHTML = "Beginner";
        else if (jog_time < 10) document.getElementById("jog_time").innerHTML = "Advanced";
        else document.getElementById("jog_time").innerHTML = "Intermediate";

        if (situp_reps < 23) document.getElementById("situp_reps").innerHTML = "Beginner";
        else if (situp_reps > 158) document.getElementById("situp_reps").innerHTML = "Elite";
        else if (situp_reps >= 23 && situp_reps < 60) document.getElementById("situp_reps").innerHTML = "Novice";
        else if (situp_reps >= 60 && situp_reps < 106) document.getElementById("situp_reps").innerHTML = "Intermediate";
        else document.getElementById("situp_reps").innerHTML = "Advanced";

        if (pushup_reps < 18) document.getElementById("pushup_reps").innerHTML = "Beginner";
        else if (pushup_reps > 98) document.getElementById("pushup_reps").innerHTML = "Elite";
        else if (pushup_reps >= 18 && pushup_reps < 41) document.getElementById("pushup_reps").innerHTML = "Novice";
        else if (pushup_reps >= 41 && pushup_reps < 68) document.getElementById("pushup_reps").innerHTML = "Intermediate";
        else document.getElementById("pushup_reps").innerHTML = "Advanced";

        if (sit_reach <= -9) document.getElementById("sit_reach").innerHTML = "Poor";
        else if (sit_reach >= 17) document.getElementById("sit_reach").innerHTML = "Excellent";
        else if (sit_reach > -9 && sit_reach < 6) document.getElementById("sit_reach").innerHTML = "Average";
        else document.getElementById("sit_reach").innerHTML = "Good";
        break;

    case 'F':
        if (waistline <= 80.9) document.getElementById("waistline").innerHTML = "Normal";
        else if (waistline > 80.9 && waistline < 90) document.getElementById("waistline").innerHTML = "High Risk";
        else if (waistline >= 90) document.getElementById("waistline").innerHTML = "Very High Risk";

        if (bpm_rest < 73) document.getElementById("bpm_rest").innerHTML = "Good";
        else if (bpm_rest > 77) document.getElementById("bpm_rest").innerHTML = "Poor";
        else document.getElementById("bpm_rest").innerHTML = "Average";

        if (jog_time > 15) document.getElementById("jog_time").innerHTML = "Beginner";
        else if (jog_time < 11) document.getElementById("jog_time").innerHTML = "Advanced";
        else document.getElementById("jog_time").innerHTML = "Intermediate";

        if (situp_reps < 13) document.getElementById("situp_reps").innerHTML = "Beginner";
        else if (situp_reps > 127) document.getElementById("situp_reps").innerHTML = "Elite";
        else if (situp_reps >= 13 && situp_reps < 44) document.getElementById("situp_reps").innerHTML = "Novice";
        else if (situp_reps >= 44 && situp_reps < 83) document.getElementById("situp_reps").innerHTML = "Intermediate";
        else document.getElementById("situp_reps").innerHTML = "Advanced";

        if (pushup_reps < 5) document.getElementById("pushup_reps").innerHTML = "Beginner";
        else if (pushup_reps > 55) document.getElementById("pushup_reps").innerHTML = "Elite";
        else if (pushup_reps >= 5 && pushup_reps < 19) document.getElementById("pushup_reps").innerHTML = "Novice";
        else if (pushup_reps >= 19 && pushup_reps < 37) document.getElementById("pushup_reps").innerHTML = "Intermediate";
        else document.getElementById("pushup_reps").innerHTML = "Advanced";

        if (sit_reach <= -8) document.getElementById("sit_reach").innerHTML = "Poor";
        else if (sit_reach >= 21) document.getElementById("sit_reach").innerHTML = "Excellent";
        else if (sit_reach > -8 && sit_reach < 11) document.getElementById("sit_reach").innerHTML = "Average";
        else document.getElementById("sit_reach").innerHTML = "Good";
        break;
}