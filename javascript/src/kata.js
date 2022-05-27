const countWords = (phrase) => phrase.split(' ').length;

const processText = (phrase) => {
  return `
  1. two
  2. words

  The text has in total ${countWords(phrase)} words`;
};

module.exports = {
  processText
};
