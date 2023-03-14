//MENTAL HEALTH TIPS GENERATOR
var quotes = [
  "Take time for yourself and prioritize self-care.",
  "Don't be afraid to seek help and support from others.",
  "Practice mindfulness and focus on the present moment.",
  "Challenge negative thoughts and replace them with positive ones.",
  "Set realistic goals and celebrate your accomplishments.",
  "Get enough sleep, exercise regularly, and eat a balanced diet.",
  "Stay connected with loved ones and build a strong support network.",
  "Find healthy coping mechanisms for stress and difficult emotions.",
  "Remember that it's okay to ask for help and take things one day at a time.",
  "Be kind to yourself and practice self-compassion.",
  "Seek professional help if needed, and know that there is no shame in doing so.",
  "Spend time in nature and appreciate the beauty around you.",
  "Engage in creative activities that bring you joy.",
  "Learn a new skill or hobby to challenge your mind and boost your confidence.",
  "Practice gratitude and focus on what you are thankful for.",
  "Take breaks from technology and enjoy some quiet time.",
  "Engage in physical activity that you enjoy, whether it's dancing or hiking.",
  "Surround yourself with positive, supportive people.",
  "Take deep breaths and practice relaxation techniques.",
  "Focus on your strengths and celebrate your unique qualities.",
  "Avoid comparing yourself to others and instead focus on your own journey.",
  "Make time for laughter and fun in your life.",
  "Express your feelings and emotions in a healthy way.",
  "Set boundaries with others and prioritize your own needs.",
  "Learn to say no when you need to.",
  "Take small steps towards your goals and be patient with yourself.",
  "Practice forgiveness and let go of grudges.",
  "Challenge yourself to try new things and step out of your comfort zone.",
  "Journal or write down your thoughts and feelings.",
  "Remember to take care of your physical health as well as your mental health."
];
function newQuote(){
  var randonNumber = Math.floor(Math.random() * (quotes.length));
  document.getElementById('quoteDisplay').innerHTML = quotes[randonNumber];
}