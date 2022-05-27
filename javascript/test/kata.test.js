const { analyse } = require("../src/kata");

describe("Kata", () => {
  it("Analyse returns 0 when string is empty", () => {
    var result = analyse("");
    expect(result).toEqual([]);
  });
  it("Analyse returns 0 when string is undefined", () => {
    var result = analyse();
    expect(result).toEqual([]);
  });
  it("No devuelve un array vacio si text no esta vacio", () => {
    var result = analyse("test");
    expect(result).toEqual(["test"]);
  })
});
