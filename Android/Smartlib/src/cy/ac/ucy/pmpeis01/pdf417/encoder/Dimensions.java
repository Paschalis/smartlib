/*
 This file is part of SmartLib Project.

    SmartLib is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    SmartLib is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with SmartLib.  If not, see <http://www.gnu.org/licenses/>.
    
	Author: Paschalis Mpeis

	Affiliation:
	Data Management Systems Laboratory 
	Dept. of Computer Science 
	University of Cyprus 
	P.O. Box 20537 
	1678 Nicosia, CYPRUS 
	Web: http://dmsl.cs.ucy.ac.cy/
	Email: dmsl@cs.ucy.ac.cy
	Tel: +357-22-892755
	Fax: +357-22-892701
	

 */

package cy.ac.ucy.pmpeis01.pdf417.encoder;

/**
 * Data object to specify the minimum and maximum number of rows and columns for a PDF417 barcode.
 *
 * @author qwandor@google.com (Andrew Walbran)
 */
public final class Dimensions {

  private final int minCols;
  private final int maxCols;
  private final int minRows;
  private final int maxRows;

  public Dimensions(int minCols, int maxCols, int minRows, int maxRows) {
    this.minCols = minCols;
    this.maxCols = maxCols;
    this.minRows = minRows;
    this.maxRows = maxRows;
  }

  public int getMinCols() {
    return minCols;
  }

  public int getMaxCols() {
    return maxCols;
  }

  public int getMinRows() {
    return minRows;
  }

  public int getMaxRows() {
    return maxRows;
  }

}
