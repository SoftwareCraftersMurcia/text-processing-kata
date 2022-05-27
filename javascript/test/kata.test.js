const { processText } = require('../src/kata');

describe("text processor tests", () => {
  describe('regarding the words count', function () {
    it.each`
      phrase    | expectedCount
      ${'word'} |  ${1}
    `("should count $expectedCount for the phrase '$phrase' ", ({phrase, expectedCount}) => {
       const text = processText(phrase);
       const expectedText = `Those are the top ${expectedCount} words used:`

      expect(text).toContain(expectedText)
    });
  });
});
