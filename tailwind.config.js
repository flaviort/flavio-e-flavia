// tailwind.config.js
module.exports = {
	content: [
		"./assets/scss/main.scss",
		"./**/*.php"
	],
	theme: {
		extend: {
			zIndex: {
				'1': '1',
				'2': '2',
				'3': '3',
				'4': '4',
				'5': '5',
				'6': '6',
				'7': '7',
				'8': '8',
				'9': '9',
			},
			colors: {
				'mauve': '#861b5e',
				'mauve-dark': '#640641',
			},
		}
	},
	variants: {
		extend: {},
	},
	plugins: [],
}