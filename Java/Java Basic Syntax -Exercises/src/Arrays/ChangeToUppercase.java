package Arrays;

import jdk.nashorn.internal.runtime.regexp.joni.Regex;

import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class ChangeToUppercase {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();

        final String regexPattern = "<upcase>(.*?)<\\/upcase>";
        final Pattern pattern = Pattern.compile(regexPattern);
        final Matcher mathcher = pattern.matcher(input);

        while (mathcher.find()){
            String replaceText = mathcher.group(1).toUpperCase();
            String textToReplace = mathcher.group(0);
         input =   input.replaceAll(textToReplace, replaceText);
        }
        System.out.println(input);
    }
}
