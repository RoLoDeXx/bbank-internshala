window.onload = () => {
	let facts = [
		"Just 1 donation can save up to 3 lives.",
		"The average red blood cell transfusion is 3 pints (or 3 whole-blood donations).",
		"More than 1 million people every year are diagnosed with cancer for the first time. Many of them will need blood—sometimes daily—during chemotherapy.",
		"More than 38,000 blood donations are needed every day.",
		"Type O-negative whole blood can be transfused to people with any blood type, but this type of blood is rare, and supplies of it are low.",
		"Type AB plasma can be transfused to patients with all other blood types, but it's also in short supply.",
		"While 38% of the American population is eligible to give blood, only 2% actually donates.",
		"Type O-negative whole blood can be transfused to people with any blood type, but this type of blood is rare, and supplies of it are low",
		"If you’ve recently had a tattoo, piercing, semi-permanent make-up –any treatment that pierces the skin -- you will need to wait at least four months before being eligible to donate",
	];

	try {
		let index = Math.floor(Math.random() * facts.length);
		document.querySelector("#donation-fact").textContent = facts[index];
	} catch (error) {}
};
