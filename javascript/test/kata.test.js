const { analyse } = require("../src/kata");

describe("Kata", () => {
  it("Analyse returns 0 when string is empty", () => {
    var result = analyse("");
    expect(result).toBe(0);
  });
});
