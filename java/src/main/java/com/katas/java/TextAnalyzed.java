package com.katas.java;

import java.util.List;
import java.util.Set;

public final class TextAnalyzed {

  private long numberWords;
  private List<String> topWords;

  public TextAnalyzed(long numberWords, List<String> topWords) {
    this.numberWords = numberWords;
    this.topWords = topWords;
  }

  public long wordCount() {
    return numberWords;
  }

  public List<String> topWords() {
    return topWords;
  }
}
