interface Section1Data {
  text_1: string;
}

interface BlockData {
  text: string;
  title: string;
}

interface Section2Data {
  blocks: BlockData[];
}

interface Section3Data {
  text: string;
  label: string;
  title: string;
  blocks: BlockData[];
}

interface Section4Data {
  list: string[];
  label: string;
  title: string;
}

interface Section5Data {
  text: string;
  label: string;
  title: string;
}

interface Section6Data {
  text: string;
}

interface Section7Data {
  text: string;
}

export interface PageData {
  section_1: Section1Data;
  section_2: Section2Data;
  section_3: Section3Data;
  section_4: Section4Data;
  section_5: Section5Data;
  section_6: Section6Data;
  section_7: Section7Data;
}